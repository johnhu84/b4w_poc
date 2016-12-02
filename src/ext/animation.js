/**
 * Copyright (C) 2014-2016 Triumph LLC
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
"use strict";

/**
 * API methods for animation.
 * @see https://www.blend4web.com/doc/en/animation.html
 * @module animation
 * @local AnimFinishCallback
 * @local AnimBehavior
 * @local AnimType
 * @local AnimSlot
 */
b4w.module["animation"] = function(exports, require) {

var m_anim  = require("__animation");
var m_armat = require("__armature");
var m_obj_util = require("__obj_util");
var m_print = require("__print");
var m_tsr = require("__tsr");


/**
 * Animation finish callback.
 * @callback AnimFinishCallback
 * @param {Object3D} obj Animated object.
 * @param {AnimSlot} slot_num Animation slot.
 */

/**
 * Animation behavior enum.
 * @see {@link module:animation.AB_CYCLIC},
 * {@link module:animation.AB_FINISH_RESET},
 * {@link module:animation.AB_FINISH_STOP}
 * @typedef AnimBehavior
 * @type {Number}
 */

/**
 * Animation type enum. One of OBJ_ANIM_TYPE_*.
 * @typedef AnimType
 * @type {Number}
 */

/**
 * Animation slot enum. One of SLOT_*.
 * @typedef AnimSlot
 * @type {Number}
 */

/**
 * Object's animation slot 0.
 * @const {AnimSlot} module:animation.SLOT_0
 */
exports.SLOT_0   = m_anim.SLOT_0;

/**
 * Object's animation slot 1.
 * @const {AnimSlot} module:animation.SLOT_1
 */
exports.SLOT_1   = m_anim.SLOT_1;

/**
 * Object's animation slot 2.
 * @const {AnimSlot} module:animation.SLOT_2
 */
exports.SLOT_2   = m_anim.SLOT_2;

/**
 * Object's animation slot 3.
 * @const {AnimSlot} module:animation.SLOT_3
 */
exports.SLOT_3   = m_anim.SLOT_3;

/**
 * Object's animation slot 4.
 * @const {AnimSlot} module:animation.SLOT_4
 */
exports.SLOT_4   = m_anim.SLOT_4;

/**
 * Object's animation slot 5.
 * @const {AnimSlot} module:animation.SLOT_5
 */
exports.SLOT_5   = m_anim.SLOT_5;

/**
 * Object's animation slot 6.
 * @const {AnimSlot} module:animation.SLOT_6
 */
exports.SLOT_6   = m_anim.SLOT_6;

/**
 * Object's animation slot 7.
 * @const {AnimSlot} module:animation.SLOT_7
 */
exports.SLOT_7   = m_anim.SLOT_7;

/**
 * All object's animation slots.
 * @const {AnimSlot} module:animation.SLOT_ALL
 */
exports.SLOT_ALL = m_anim.SLOT_ALL;

/**
 * Animation type: none.
 * @const {AnimType} module:animation.OBJ_ANIM_TYPE_NONE
 */
exports.OBJ_ANIM_TYPE_NONE      = m_anim.OBJ_ANIM_TYPE_NONE;

/**
 * Animation type: armature.
 * @const {AnimType} module:animation.OBJ_ANIM_TYPE_ARMATURE
 */
exports.OBJ_ANIM_TYPE_ARMATURE  = m_anim.OBJ_ANIM_TYPE_ARMATURE;

/**
 * Animation type: object.
 * @const {AnimType} module:animation.OBJ_ANIM_TYPE_OBJECT
 */
exports.OBJ_ANIM_TYPE_OBJECT    = m_anim.OBJ_ANIM_TYPE_OBJECT;

/**
 * Animation type: vertex.
 * @const {AnimType} module:animation.OBJ_ANIM_TYPE_VERTEX
 */
exports.OBJ_ANIM_TYPE_VERTEX    = m_anim.OBJ_ANIM_TYPE_VERTEX;

/**
 * Animation type: sound.
 * @const {AnimType} module:animation.OBJ_ANIM_TYPE_SOUND
 */
exports.OBJ_ANIM_TYPE_SOUND     = m_anim.OBJ_ANIM_TYPE_SOUND;

/**
 * Animation type: particles.
 * @const {AnimType} module:animation.OBJ_ANIM_TYPE_PARTICLES
 */
exports.OBJ_ANIM_TYPE_PARTICLES = m_anim.OBJ_ANIM_TYPE_PARTICLES;

/**
 * Animation type: material.
 * @const {AnimType} module:animation.OBJ_ANIM_TYPE_MATERIAL
 */
exports.OBJ_ANIM_TYPE_MATERIAL  = m_anim.OBJ_ANIM_TYPE_MATERIAL;

/**
 * Animation behavior: cyclic.
 * @const {AnimBehavior} module:animation.AB_CYCLIC
 */
exports.AB_CYCLIC = m_anim.AB_CYCLIC;
/**
 * Animation behavior: go back to the zero frame after finishing.
 * @const {AnimBehavior} module:animation.AB_FINISH_RESET
 */
exports.AB_FINISH_RESET = m_anim.AB_FINISH_RESET;
/**
 * Animation behavior: stop the animation after finishing.
 * @const {AnimBehavior} module:animation.AB_FINISH_STOP
 */
exports.AB_FINISH_STOP = m_anim.AB_FINISH_STOP;

var _tsr_tmp = m_tsr.create();

/**
 * Check if the object is animated.
 * @method module:animation.is_animated
 * @param {Object3D} obj Object 3D
 * @returns {Boolean} Checking result.
 */
exports.is_animated = function(obj) {
    return m_anim.is_animated(obj);
}

/**
 * Return the names of all available animations.
 * @method module:animation.get_anim_names
 * @param {Object3D} obj Object 3D
 * @returns {String[]} Array of animation names.
 */
exports.get_anim_names = function(obj) {
    if (!m_anim.obj_is_animatable(obj))
        return [];

    return m_anim.get_anim_names(obj);
}

/**
 * Return the name of the applied animation.
 * @method module:animation.get_current_anim_name
 * @param {Object3D} obj Object 3D
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number
 * @returns {?String} Current animation name or null.
 */
exports.get_current_anim_name = function(obj, slot_num) {
    if (!m_anim.is_animated(obj))
        return null;

    slot_num = slot_num || m_anim.SLOT_0;
    return m_anim.get_anim_by_slot_num(obj, slot_num);
}

/**
 * Apply the animation to the object.
 * @method module:animation.apply
 * @param {Object3D} obj Object 3D
 * @param {String} name Animation name
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number.
 */
exports.apply = function(obj, name, slot_num) {
    if (slot_num > m_anim.SLOT_7) {
        m_print.error("Can't apply animation to slot " + slot_num +
                      " for object \"" + obj.name +
                      "\". Object can have maximum of 8 animation slots");
        return;
    }
    slot_num = slot_num || m_anim.SLOT_0;

    if (m_anim.is_animated(obj)) {
        var applied_slot = m_anim.get_slot_num_by_anim(obj, name);
        if (applied_slot != -1 && applied_slot != slot_num) {
            m_print.error("Animation \"" + name +
                          "\" is already applied to object \"" + obj.name +
                          "\" (slot \"" + applied_slot + "\").");
            return;
        }
    }

    if (!m_anim.validate_action_by_name(obj, name)) {
        m_print.error("No fcurves in action \"" + name + "\"");
        return;
    }

    m_anim.apply(obj, null, name, slot_num);
}

/**
 * Apply the animation to the object.
 * @method module:animation.apply_ext
 * @param {Object3D} obj Object 3D
 * @param {?String[]} name_list Array of material and nested groups names and
 * animation name.
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number.
 */
exports.apply_ext = function(obj, name_list, slot_num) {
    if (slot_num > m_anim.SLOT_7) {
        m_print.error("Can't apply animation to slot " + slot_num +
                      " for object \"" + obj.name +
                      "\". Object can have maximum of 8 animation slots");
        return;
    }
    slot_num = slot_num || m_anim.SLOT_0;

    var name = name_list[0];
    if (m_anim.is_animated(obj)) {
        var applied_slot = m_anim.get_slot_num_by_anim(obj, name);
        if (applied_slot != -1 && applied_slot != slot_num) {
            m_print.error("Animation \"" + name +
                          "\" is already applied to object \"" + obj.name +
                          "\" (slot \"" + applied_slot + "\").");
            return;
        }
    }

    if (!m_anim.validate_action_by_name(obj, name)) {
        m_print.error("No fcurves in action \"" + name + "\"");
        return;
    }
    var new_name_list = name_list.slice(1);

    m_anim.apply(obj, new_name_list, name, slot_num);
}

/**
 * Remove the animation from the object.
 * @method module:animation.remove
 * @param {Object3D} obj Object 3D
 */
exports.remove = function(obj) {
    m_anim.remove(obj);
}

/**
 * Remove the animation from the given animation slot of the object.
 * @method module:animation.remove_slot_animation
 * @param {Object3D} obj Object 3D
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number.
 */
exports.remove_slot_animation = function(obj, slot_num) {
    if (!m_anim.is_animated(obj))
        return;

    slot_num = slot_num || m_anim.SLOT_0;
    m_anim.remove_slot_animation(obj, slot_num);
}

/**
 * Apply the default animation (i.e. assigned in Blender) to the object.
 * @method module:animation.apply_def
 * @param {Object3D} obj Object 3D
 */
exports.apply_def = function(obj) {
    m_anim.apply_def(obj);
}

/**
 * Play the object's animation. 
 * The animation must be applied to the object before,
 * or the object must have the default animation (i.e. assigned in Blender).
 * @method module:animation.play
 * @param {Object3D} obj Object 3D
 * @param {AnimFinishCallback} [finish_callback] Callback to execute on finished animation
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number.
 */
exports.play = function(obj, finish_callback, slot_num) {
    if (!m_anim.is_animated(obj)) {
        m_print.error("Object \"" + obj.name + "\" has no applied animation");
        return;
    }

    slot_num = slot_num || m_anim.SLOT_0;
    m_anim.play(obj, finish_callback, slot_num);
    m_anim.update_object_animation(obj, 0, slot_num, true);
}

/**
 * Stop the object's animation.
 * @method module:animation.stop
 * @param {Object3D} obj Object 3D
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number
 */
exports.stop = function(obj, slot_num) {
    if (m_anim.is_animated(obj)) {
        slot_num = slot_num || m_anim.SLOT_0;
        m_anim.stop(obj, slot_num);
    }
}
/**
 * Check if the object's animation is being played back.
 * @method module:animation.is_play
 * @param {Object3D} obj Object 3D
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number
 * @returns {Boolean} Checking result.
 */
exports.is_play = function(obj, slot_num) {
    if (!m_anim.is_animated(obj))
        return false;

    slot_num = slot_num || m_anim.SLOT_0;
    return m_anim.is_play(obj, slot_num);
}

/**
 * Set the current frame of the object's animation.
 * @method module:animation.set_frame
 * @param {Object3D} obj Object 3D
 * @param {Number} frame Current frame (float)
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number
 */
exports.set_frame = function(obj, frame, slot_num) {
    if (!m_anim.is_animated(obj))
        return;

    slot_num = slot_num || m_anim.SLOT_0;
    m_anim.set_frame(obj, frame, slot_num);
}

/**
 * Set the first frame of the object's animation.
 * @method module:animation.set_first_frame
 * @param {Object3D} obj Object 3D
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number
 */
exports.set_first_frame = function(obj, slot_num) {
    if (!m_anim.is_animated(obj))
        return;
    m_anim.set_first_frame(obj, slot_num);
}

/**
 * Set the last frame of the object's animation.
 * @method module:animation.set_last_frame
 * @param {Object3D} obj Object 3D
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number
 */
exports.set_last_frame = function(obj, slot_num) {
    if (!m_anim.is_animated(obj))
        return;

    slot_num = slot_num || m_anim.SLOT_0;

    var start = m_anim.get_anim_start_frame(obj, slot_num);
    var len = m_anim.get_anim_length(obj, slot_num);

    m_anim.set_frame(obj, start + len -
            m_anim.LAST_FRAME_EPSILON, slot_num);
}

/**
 * Get the current frame of the object's animation.
 * @method module:animation.get_frame
 * @param {Object3D} obj Object 3D
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number
 * @returns {Number} Current frame
 */
exports.get_frame = function(obj, slot_num) {
    if (!m_anim.is_animated(obj))
        return 0.0;

    slot_num = slot_num || m_anim.SLOT_0;
    return m_anim.get_current_frame_float(obj, slot_num);
}

/**
 * Set the speed of the object's animation.
 * @method module:animation.set_speed
 * @param {Object3D} obj Object 3D
 * @param {Number} speed Speed (may be negative) (float)
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number
 */
exports.set_speed = function(obj, speed, slot_num) {
    if (!m_anim.is_animated(obj))
        return;

    slot_num = slot_num || m_anim.SLOT_0;
    speed = speed || 1;
    m_anim.set_speed(obj, speed, slot_num);
}

/**
 * Get the speed of the object's animation.
 * @method module:animation.get_speed
 * @param {Object3D} obj Object 3D
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number
 * @returns {Number} Animation speed.
 */
exports.get_speed = function(obj, slot_num) {
    if (!m_anim.is_animated(obj))
        return 0;

    slot_num = slot_num || m_anim.SLOT_0;

    if (!obj.anim_slots[slot_num])
        return 0;

    return m_anim.get_speed(obj, slot_num);
}

/**
 * Get the starting frame of the object's animation.
 * @method module:animation.get_anim_start_frame
 * @param {Object3D} obj Object 3D
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number
 * @returns {Number} Animation start frame or -1 for incorrect object
 */
exports.get_anim_start_frame = function(obj, slot_num) {
    if (m_anim.is_animated(obj)) {
        slot_num = slot_num || m_anim.SLOT_0;

        if (!obj.anim_slots[slot_num])
            return -1;
        else
            return m_anim.get_anim_start_frame(obj, slot_num);
    }

    return -1;
}

/**
 * Get the length of the object's animation measured in frames.
 * @method module:animation.get_anim_length
 * @param {Object3D} obj Object 3D
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number
 * @returns {Number} Animation length or -1 for incorrect object
 */
exports.get_anim_length = function(obj, slot_num) {
    if (m_anim.is_animated(obj)) {
        slot_num = slot_num || m_anim.SLOT_0;

        if (!obj.anim_slots[slot_num])
            return -1;
        else
            return m_anim.get_anim_length(obj, slot_num);
    }

    return -1;
}

/**
 * Set behavior for the object's animation.
 * @method module:animation.set_behavior
 * @param {Object3D} obj Object 3D
 * @param {AnimBehavior} behavior Behavior enum
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number
 */
exports.set_behavior = function(obj, behavior, slot_num) {
    if (!m_anim.is_animated(obj))
        return;

    slot_num = slot_num || m_anim.SLOT_0;
    m_anim.set_behavior(obj, behavior, slot_num);
}

/**
 * Get behavior of the object's animation.
 * @method module:animation.get_behavior
 * @param {Object3D} obj Object 3D
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number
 * @returns {AnimBehavior} Behavior enum
 */
exports.get_behavior = function(obj, slot_num) {
    if (!m_anim.is_animated(obj))
        return null;

    slot_num = slot_num || m_anim.SLOT_0;
    return m_anim.get_behavior(obj, slot_num);
}

/**
 * Apply smoothing to the object's animation.
 * In order to disable the smoothing, specify the zero periods.
 * @method module:animation.apply_smoothing
 * @param {Object3D} obj Object 3D
 * @param {Number} [trans_period=0] Translation smoothing period
 * @param {Number} [quat_period=0] Rotation smoothing period
 * @param {AnimSlot} [slot_num = SLOT_0] Animation slot number
 */
exports.apply_smoothing = function(obj, trans_period, quat_period, slot_num) {
    slot_num = slot_num || m_anim.SLOT_0;
    if (m_anim.is_animated(obj))
        m_anim.apply_smoothing(obj, trans_period, quat_period, slot_num);
}

/**
 * Convert animation frames to seconds.
 * @method module:animation.frame_to_sec
 * @param {Number} frame Frame number
 * @returns {Number} Number of seconds
 */
exports.frame_to_sec = function(frame) {
    return m_anim.frame_to_sec(frame);
}

/**
 * Get the translation of the armature's bone.
 * @method module:animation.get_bone_translation
 * @param {Object3D} armobj Armature object
 * @param {String} bone_name Bone name
 * @param {Vec3} [dest] Destination vector
 * @deprecated Use {@link module:armature.get_bone_tsr|armature.get_bone_tsr} instead
 */
exports.get_bone_translation = function(armobj, bone_name, dest) {
    m_print.error_deprecated("get_bone_translation", "armature.get_bone_tsr");
    if (!m_obj_util.is_armature(armobj))
        return null;

    if (!m_armat.check_bone(armobj, bone_name)) {
        m_print.error("There is no bone: \"", bone_name, "\" in \"", armobj.name, "\".");
        return null;
    }

    if (!dest)
        var dest = new Float32Array(3);

    var tsr = _tsr_tmp;
    m_armat.get_bone_tsr(armobj, bone_name, false, false, tsr);

    dest[0] = tsr[0];
    dest[1] = tsr[1];
    dest[2] = tsr[2];

    return dest;
}

/**
 * Get the first armature object used for skinning of the given mesh object.
 * @method module:animation.get_first_armature_object
 * @param {Object3D} obj Object 3D
 * @returns {?Object3D} Armature object or null
 * @deprecated Unused
 */
exports.get_first_armature_object = function(obj) {
    m_print.error_once("get_first_armature_object() deprecated");
    return null;
}

/**
 * Get the slot number of the object to which the animation is assigned.
 * @method module:animation.get_slot_num_by_anim
 * @param {Object3D} obj Object 3D
 * @param {String} anim_name Animation name
 * @returns {?Number} Animation slot number
 */
exports.get_slot_num_by_anim = function(obj, anim_name) {
    if (!m_anim.is_animated(obj) || !anim_name)
        return -1;

    return m_anim.get_slot_num_by_anim(obj, anim_name);
}

/**
 * Get the object's animation type.
 * @method module:animation.get_anim_type
 * @param {Object3D} obj Object 3D
 * @param {AnimSlot} [slot_num = SLOT_0] Slot number
 * @returns {?AnimType} Animation type
 */
exports.get_anim_type = function(obj, slot_num) {
    if (!m_anim.is_animated(obj))
        return null;

    return m_anim.get_anim_type(obj, slot_num);
}

/**
 * Apply the animation to the first available animation slot.
 * @method module:animation.apply_to_first_empty_slot
 * @param {Object3D} obj Object 3D
 * @param {String} name Animation name.
 * @returns {Number} Slot number or -1 if no empty slots found.
 */
exports.apply_to_first_empty_slot = function(obj, name) {
    return m_anim.apply_to_first_empty_slot(obj, name);
}

/**
 * Get the mix factor for the skeletal animations assigned to the last two animation slots.
 * @method module:animation.get_skel_mix_factor
 * @param {Object3D} armobj Armature object.
 * @returns {Number} Mix factor.
 */
exports.get_skel_mix_factor = function(armobj) {
    return armobj.render.anim_mix_factor;
}

/**
 * Set the mix factor for the skeletal animations assigned to the last two animation slots.
 * Specify the non-zero time for smooth animation transitions.
 * @method module:animation.set_skel_mix_factor
 * @param {Object3D} armobj Armature object.
 * @param {Number} factor Target animation mix factor.
 * @param {Number} [time=0] Time interval for changing the mix factor from
 * the current to the target value.
 */
exports.set_skel_mix_factor = function(armobj, factor, time) {
    if (!m_obj_util.is_armature(armobj)) {
        m_print.error("Can't blend animation. Object \"" + armobj.name + "\" is not armature");
        return;
    }

    factor = Math.min(Math.max(factor, 0), 1);
    if (armobj.render.anim_mix_factor == factor)
        return;

    time = time || 0;

    m_anim.set_skel_mix_factor(armobj, factor, time);
}

}
