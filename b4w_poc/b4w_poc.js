"use strict"

var m_app, m_scene, m_light, m_material, m_trans;
var obj_arr = []; 
// register the application module
b4w.register("b4w_poc", function(exports, require) {

// import modules used by the app
m_app       = require("app");
var m_cam	= require("camera");
var m_cont	= require("container");
var m_ctl	= require("controls");
var m_cfg       = require("config");
var m_data      = require("data");
var m_mouse	= require("mouse");
var m_math	= require("math");
var m_obj	= require("objects");
var m_phy	= require("physics");
var m_preloader = require("preloader");
var m_version   = require("version");
m_scene = require("scenes");
m_trans	= require("transform");
m_light = require("lights");
m_material = require("material");
var m_util	= require("util");
var m_quat 	= require("quat");

// detect application mode
var DEBUG = (m_version.type() === "DEBUG");

var OUTLINE_COLOR_VALID = [0, 1, 0];
var OUTLINE_COLOR_ERROR = [1, 0, 0];
var FLOOR_PLANE_NORMAL = [0, 1, 0];

var ROT_ANGLE = Math.PI/4;

var WALL_X_MAX = 4;
var WALL_X_MIN = -3.8;
var WALL_Z_MAX = 4.2;
var WALL_Z_MIN = -3.5;

var _obj_delta_xy = new Float32Array(2);
var spawner_pos = new Float32Array(3);
var _vec3_tmp = new Float32Array(3);
var _vec3_tmp2 = new Float32Array(3);
var _vec3_tmp3 = new Float32Array(3);
var _vec4_tmp = new Float32Array(4);
var _pline_tmp = m_math.create_pline();

var _drag_mode = false;
var _enable_camera_controls = true;

var _selected_obj = null;
// automatically detect assets path
var APP_ASSETS_PATH = m_cfg.get_std_assets_path() + "b4w_poc/";

/**
 * export the method to initialize the app (called at the bottom of this file)
 */
exports.init = function() {
    m_app.init({
        canvas_container_id: "main_canvas_container",
        callback: init_cb,
        show_fps: DEBUG,
        console_verbose: DEBUG,
        autoresize: true
    });
}

/**
 * callback executed when the app is initialized 
 */
function init_cb(canvas_elem, success) {

    if (!success) {
        console.log("b4w init failure");
        return;
    }

    m_preloader.create_preloader();

    // ignore right-click on the canvas element
    canvas_elem.oncontextmenu = function(e) {
        e.preventDefault();
        e.stopPropagation();
        return false;
    };

    canvas_elem.addEventListener("mousedown", main_canvas_down);
    canvas_elem.addEventListener("touchstart", main_canvas_down);

    canvas_elem.addEventListener("mouseup", main_canvas_up);
    canvas_elem.addEventListener("touchend", main_canvas_up);

    canvas_elem.addEventListener("mousemove", main_canvas_move);
    canvas_elem.addEventListener("touchmove", main_canvas_move);

    window.onresize = m_cont.resize_to_container;
    m_cont.resize_to_container();
    load();
}

/**
 * load the scene data
 */
function load() {
    //m_data.load(APP_ASSETS_PATH + "b4w_poc.json", load_cb, preloader_cb);
    //m_data.load("blend_data/environment.json");
	//load_cb();
//preloader_cb();
//m_app.enable_camera_controls();
    m_data.load("blend_data/environment.json", load_cb, preloader_cb); 
    //m_data.load(APP_ASSETS_PATH + "b4w_poc.json", load_cb, preloader_cb); 
    for (var i in objs) {
	if (!objs[i].endsWith("environment.json") && !objs[i].endsWith("background.json"))
		obj_arr.push(m_data.load(objs[i], enable_physics, null, null, true));
    }
    m_data.load("blend_data/background.json");
    //m_data.load("blend_data/point_light4.json", load_cb, preloader_cb); 	
    //m_data.load("blend_data/11232016.json");
	//enable_physics();
}

/**
 * update the app's preloader
 */
function preloader_cb(percentage) {
    m_preloader.update_preloader(percentage);
}

/**
 * callback executed when the scene data is loaded
 */
function load_cb(data_id, success) {

    if (!success) {
        console.log("b4w load failure");
        return;
    }

    m_app.enable_camera_controls();

    // place your code here

}

function enable_physics(data_id) {
    var objs = m_scene.get_all_objects("ALL", data_id);
    for (var i = 0; i < objs.length; i++) {
        var obj = objs[i];
//m_phy.enable_simulation(obj);
        if (m_phy.has_physics(obj)) {
            m_phy.enable_simulation(obj);

            // create sensors to detect collisions
            var sensor_col = m_ctl.create_collision_sensor(obj, "FURNITURE");
            var sensor_sel = m_ctl.create_selection_sensor(obj, true);

            if (obj == _selected_obj)
                m_ctl.set_custom_sensor(sensor_sel, 1);

            m_ctl.create_sensor_manifold(obj, "COLLISION", m_ctl.CT_CONTINUOUS, 
                    [sensor_col, sensor_sel], logic_func, trigger_outline);


            // spawn appended object at a certain position
            var obj_parent = m_obj.get_parent(obj);
            if (obj_parent && m_obj.is_armature(obj_parent))
                // translate the parent (armature) of the animated object
                m_trans.set_translation_v(obj_parent, spawner_pos);
            else
                m_trans.set_translation_v(obj, spawner_pos);
        }

        // show appended object
        if (m_obj.is_mesh(obj))
            m_scene.show_object(obj);
    }
}

function main_canvas_down(e) {
    _drag_mode = true;

    if (e.preventDefault)
        e.preventDefault();

    var x = m_mouse.get_coords_x(e);
    var y = m_mouse.get_coords_y(e);

    var obj = m_scene.pick_object(x, y);

    // handling outline effect
    if (_selected_obj != obj) {
        if (_selected_obj)
            //m_scene.clear_outline_anim(_selected_obj);
        if (obj)
            //m_scene.apply_outline_anim(obj, 1, 1, 0);

        _selected_obj = obj;
    }

    // calculate delta in viewport coordinates
    if (_selected_obj) {
        var cam = m_scene.get_active_camera();

        var obj_parent = m_obj.get_parent(_selected_obj);
        if (obj_parent && m_obj.is_armature(obj_parent))
            // get translation from the parent (armature) of the animated object
            m_trans.get_translation(obj_parent, _vec3_tmp);
        else
            m_trans.get_translation(_selected_obj, _vec3_tmp);
        m_cam.project_point(cam, _vec3_tmp, _obj_delta_xy);

        _obj_delta_xy[0] = x - _obj_delta_xy[0];
        _obj_delta_xy[1] = y - _obj_delta_xy[1];
    }
}

function main_canvas_up(e) {
    _drag_mode = false;
    // enable camera controls after releasing the object
    if (!_enable_camera_controls) {
        m_app.enable_camera_controls();
        _enable_camera_controls = true;
    }
}

function main_canvas_move(e) {
    if (_drag_mode)
        if (_selected_obj) {
            // disable camera controls while moving the object
            if (_enable_camera_controls) {
                m_app.disable_camera_controls();
                _enable_camera_controls = false;
            }

            // calculate viewport coordinates
            var cam = m_scene.get_active_camera();

            var x = m_mouse.get_coords_x(e);
            var y = m_mouse.get_coords_y(e);

            if (x >= 0 && y >= 0) {
                x -= _obj_delta_xy[0];
                y -= _obj_delta_xy[1];

                // emit ray from the camera
                var pline = m_cam.calc_ray(cam, x, y, _pline_tmp);
                var camera_ray = m_math.get_pline_directional_vec(pline, _vec3_tmp);

                // calculate ray/floor_plane intersection point
                var cam_trans = m_trans.get_translation(cam, _vec3_tmp2);
                m_math.set_pline_initial_point(_pline_tmp, cam_trans);
                m_math.set_pline_directional_vec(_pline_tmp, camera_ray);
                var point = m_math.line_plane_intersect(FLOOR_PLANE_NORMAL, 0,
                        _pline_tmp, _vec3_tmp3);

                // do not process the parallel case and intersections behind the camera
                if (point && camera_ray[1] < 0) {
                    var obj_parent = m_obj.get_parent(_selected_obj);
                    if (obj_parent && m_obj.is_armature(obj_parent))
                        // translate the parent (armature) of the animated object
                        m_trans.set_translation_v(obj_parent, point);
                    else
                        m_trans.set_translation_v(_selected_obj, point);
                    limit_object_position(_selected_obj);
                }
            }
        }
}

function limit_object_position(obj) {
    var bb = m_trans.get_object_bounding_box(obj);

    var obj_parent = m_obj.get_parent(obj);
    if (obj_parent && m_obj.is_armature(obj_parent))
        // get translation from the parent (armature) of the animated object
        var obj_pos = m_trans.get_translation(obj_parent, _vec3_tmp);
    else
        var obj_pos = m_trans.get_translation(obj, _vec3_tmp);

    if (bb.max_x > WALL_X_MAX)
        obj_pos[0] -= bb.max_x - WALL_X_MAX;
    else if (bb.min_x < WALL_X_MIN)
        obj_pos[0] += WALL_X_MIN - bb.min_x;

    if (bb.max_z > WALL_Z_MAX)
        obj_pos[2] -= bb.max_z - WALL_Z_MAX;
    else if (bb.min_z < WALL_Z_MIN)
        obj_pos[2] += WALL_Z_MIN - bb.min_z;

    if (obj_parent && m_obj.is_armature(obj_parent))
        // translate the parent (armature) of the animated object
        m_trans.set_translation_v(obj_parent, obj_pos);
    else
        m_trans.set_translation_v(obj, obj_pos);
}
});

// import the app module and start the app by calling the init method
b4w.require("b4w_poc").init();
