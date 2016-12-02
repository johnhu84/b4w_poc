<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>首页</title>
 <!-- Bootstrap -->
<link rel="stylesheet" href="css/global.css">
<link href="css/layout.css" rel="stylesheet">
<link href="css/fontsico.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css" />
<link rel="stylesheet" href="css/colorpicker.css" type="text/css" />
<link rel="stylesheet" href="css/viewer.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <!--<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>-->
    <script type="text/javascript" src="js/jquery.mobile-1.4.5.js"></script>
<script type="text/javascript" src="js/style.js"></script>
<link rel="stylesheet" href="css/dropkick.css" type="text/css">
<script type="text/javascript" src="js/jquery.dropkick-min.js"></script>

<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
<link href="css/easyui.css" rel="stylesheet">
<!--<script type="text/javascript" src="src/b4w.js"></script>
<script type="text/javascript" src="src/anchors.js"></script>
<script type="text/javascript" src="src/animation.js"></script>
<script type="text/javascript" src="src/armature.js"></script>
<script type="text/javascript" src="src/assets.js"></script>
<script type="text/javascript" src="src/batch.js"></script>
<script type="text/javascript" src="src/boundings.js"></script>
<script type="text/javascript" src="src/camera.js"></script>
<script type="text/javascript" src="src/compat.js"></script>
<script type="text/javascript" src="src/config.js"></script>
<script type="text/javascript" src="src/constraints.js"></script>
<script type="text/javascript" src="src/container.js"></script>
<script type="text/javascript" src="src/controls.js"></script>
<script type="text/javascript" src="src/curve.js"></script>
<script type="text/javascript" src="src/data.js"></script>
<script type="text/javascript" src="src/debug.js"></script>
<script type="text/javascript" src="src/extensions.js"></script>
<script type="text/javascript" src="src/geometry.js"></script>
<script type="text/javascript" src="src/graph.js"></script>
<script type="text/javascript" src="src/hud.js"></script>
<script type="text/javascript" src="src/input.js"></script>
<script type="text/javascript" src="src/ipc.js"></script>
<script type="text/javascript" src="src/lights.js"></script>
<script type="text/javascript" src="src/loader.js"></script>
<script type="text/javascript" src="src/logic_nodes.js"></script>
<script type="text/javascript" src="src/math.js"></script>
<script type="text/javascript" src="src/navmesh.js"></script>
<script type="text/javascript" src="src/nla.js"></script>
<script type="text/javascript" src="src/nodemat.js"></script>
<script type="text/javascript" src="src/obj_util.js"></script>
<script type="text/javascript" src="src/objects.js"></script>
<script type="text/javascript" src="src/particles.js"></script>
<script type="text/javascript" src="src/physics.js"></script>
<script type="text/javascript" src="src/prerender.js"></script>
<script type="text/javascript" src="src/primitives.js"></script>
<script type="text/javascript" src="src/print.js"></script>
<script type="text/javascript" src="src/reformer.js"></script>
<script type="text/javascript" src="src/renderer.js"></script>
<script type="text/javascript" src="src/scenegraph.js"></script>
<script type="text/javascript" src="src/scenes.js"></script>
<script type="text/javascript" src="src/sfx.js"></script>
<script type="text/javascript" src="src/shaders.js"></script>
<script type="text/javascript" src="src/subscene.js"></script>
<script type="text/javascript" src="src/texcomp.js"></script>
<script type="text/javascript" src="src/textures.js"></script>
<script type="text/javascript" src="src/time.js"></script>
<script type="text/javascript" src="src/transform.js"></script>
<script type="text/javascript" src="src/tsr.js"></script>
<script type="text/javascript" src="src/util.js"></script>
<script type="text/javascript" src="src/version.js"></script>
<script type="text/javascript" src="src/libs/gl-matrix2.js"></script>
<script type="text/javascript" src="src/libs/gpp_parser.js"></script>
<script type="text/javascript" src="src/libs/md5.js"></script>
<script type="text/javascript" src="src/ext/anchors.js"></script>
<script type="text/javascript" src="src/ext/animation.js"></script>
<script type="text/javascript" src="src/ext/armature.js"></script>
<script type="text/javascript" src="src/ext/assets.js"></script>
<script type="text/javascript" src="src/ext/camera.js"></script>
<script type="text/javascript" src="src/ext/config.js"></script>
<script type="text/javascript" src="src/ext/constraints.js"></script>
<script type="text/javascript" src="src/ext/container.js"></script>
<script type="text/javascript" src="src/ext/controls.js"></script>
<script type="text/javascript" src="src/ext/data.js"></script>
<script type="text/javascript" src="src/ext/debug.js"></script>
<script type="text/javascript" src="src/ext/geometry.js"></script>
<script type="text/javascript" src="src/ext/hud.js"></script>
<script type="text/javascript" src="src/ext/input.js"></script>
<script type="text/javascript" src="src/ext/lights.js"></script>
<script type="text/javascript" src="src/ext/logic_nodes.js"></script>
<script type="text/javascript" src="src/ext/main.js"></script>
<script type="text/javascript" src="src/ext/material.js"></script>
<script type="text/javascript" src="src/ext/math.js"></script>
<script type="text/javascript" src="src/ext/nla.js"></script>
<script type="text/javascript" src="src/ext/objects.js"></script>
<script type="text/javascript" src="src/ext/particles.js"></script>
<script type="text/javascript" src="src/ext/physics.js"></script>
<script type="text/javascript" src="src/ext/rgb.js"></script>
<script type="text/javascript" src="src/ext/scenes.js"></script>
<script type="text/javascript" src="src/ext/sfx.js"></script>
<script type="text/javascript" src="src/ext/textures.js"></script>
<script type="text/javascript" src="src/ext/time.js"></script>
<script type="text/javascript" src="src/ext/transform.js"></script>
<script type="text/javascript" src="src/ext/tsr.js"></script>
<script type="text/javascript" src="src/ext/util.js"></script>
<script type="text/javascript" src="src/ext/version.js"></script>
<script type="text/javascript" src="src/addons/app.js"></script>
<script type="text/javascript" src="src/addons/camera_anim.js"></script>
<script type="text/javascript" src="src/addons/gp_conf.js"></script>
<script type="text/javascript" src="src/addons/gyroscope.js"></script>
<script type="text/javascript" src="src/addons/hmd.js"></script>
<script type="text/javascript" src="src/addons/hmd_conf.js"></script>
<script type="text/javascript" src="src/addons/mixer.js"></script>
<script type="text/javascript" src="src/addons/mouse.js"></script>
<script type="text/javascript" src="src/addons/npc_ai.js"></script>
<script type="text/javascript" src="src/addons/preloader.js"></script>
<script type="text/javascript" src="src/addons/screenshooter.js"></script>
<script type="text/javascript" src="src/addons/storage.js"></script>
<script type="text/javascript" src="src/addons/ns_compat.js"></script>-->
    <script type="text/javascript" src="colorpicker.js"></script>
    <!--<script type="text/javascript" src="viewer.js"></script>-->
<!--<script src="JS/jquery.minicolors.js"></script>
<link rel="stylesheet" href="CSS/jquery.minicolors.css">-->
<link type="text/css" rel="stylesheet" href="css/b4w_poc.css"/>
<script type="text/javascript" src="../b4w_poc/common/b4w.simple.min.js"></script>
<script type="text/javascript">
<?php
$objs = glob('blend_data/*.json');
$js_array = json_encode($objs);
echo "var objs = ".$js_array.";\n";
echo "var obj_ids = new Array(".count($objs).");\n";
echo "var obj_names = new Array(".count($objs).");\n";
?>
</script>
<script type="text/javascript" src="viewer.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#change_map_btn').click(function(e) {
	e.preventDefault();
	var form = $(this).parents('form')[0];
	var data = new FormData();//$(this).parents('form')[0]);//.serialize();
	var file = form[0].files[0];//$(form).find('#material_diffuse_map').files[0];
	data.append('material_diffuse_map', file);	
//data = $(data).serialize();
	$.ajax({
		url: "change_diffuse_map.php",
		type: "POST",
		contentType: false,	
		processData: false,
		data: data,
		success: function(data) {
			console.log(data);
		}
	});
});
});
</script>
<!--<script type="text/javascript" src="../b4w_poc/b4w_poc.js"></script>-->
</head>
<body>
<!-------------------------- nav ---------------------->
<nav class="hd">
   <div class="hd-w clearboth">
      <ul class="nav-group nav-group-a pull-left">
          <li class="nav-item pull-left btn-draw click_drawunitbox"></li>
      </ul>
      <ul class="nav-group  nav-group-b pull-left">
          <li class="nav-item pull-left btn-newlybuild">
          </li>
          <li class="nav-item pull-left brn-open click_boclediv">
          </li>
          <li class="nav-item pull-left brn-keep click_boclediv">
          </li>
          <li class="nav-item pull-left brn-ImportActor click_boclediv">
          </li>
          <li class="nav-item pull-left brn-ExportActor click_boclediv">
          </li>
      </ul>
      <ul class="nav-group  nav-group-c pull-left">
          <li class="nav-item pull-left brn-ImportLight_button" onClick="selectTab03Syn(1)" ></li>
          <li class="nav-item pull-left btn-ImportCamera_button" onClick="selectTab03Syn(2)">></li>
      </ul>
      <ul class="nav-group  nav-group-d pull-left ">
          <li class="nav-item pull-left brn-Bake_AO" onClick="selectTab03Syn(3)"></li>
          <li class="nav-item pull-left btn-Bake_GI" onClick="selectTab03Syn(4)"></li>
          <li class="nav-item pull-left btn-Run" ></li>
       </ul>
       <ul class="nav-group  nav-group-e pull-left">
          <li class="nav-item pull-left btn-setPara_Default" onClick="selectTab03Syn(5)"></li>
          <li class="nav-item pull-left brn-Overall_View" onClick="selectTab03Syn(6)"></li>
          <li class="nav-item pull-left brn-Show_in_VR" onClick="selectTab03Syn(7)"></li>
      </ul>
      <ul class="nav-group  nav-group-f pull-left">
          <li class="nav-item pull-left btn-help"></li>
          <li class="nav-item pull-left btn-ListItem click_distablediv"></li>
      </ul>
<form action="upload_furniture.php" method="post" enctype="multipart/form-data">
<input name="furniture" type="file"/>
<input type="submit" value="add"/>
</form>  
   </div>  
</nav>
<!-------------------------- nav ---------------------->
<!-------------------------- edit  ---------------------->
<section class="hdheigh"></section>
<section class="makebox"> 
    <!--<div class="moreien " style="width:200px; height:200px; border:3px solid #ff0;" onClick="moublesprompsm()">我的模型</div>-->
    <div id="main_canvas_container"></div>
</section>
<!-------------------------- edit end ---------------------->
<!-------------------------- edit  ---------------------->
<section class="moubset">
   <ul class="tabradio">
      <li class="pull-left moubset_a tabradioitem"></li>
      <li class="pull-left moubset_b tabradioitem"></li>
      <li class="pull-left moubset_c tabradioitem"></li>
   </ul>
</section>
<!-------------------------- edit end ----------------------> c  

<!-------------------------- edit ---------------------->
<section class="et">
   <div class="hidden b4w">

   </div>
   <div class="et-box boxsetuptab">
     <div class="et-hdtab boxsetuptab-hd">
        <ul class="clearboth ">
           <li class="boxsetuptab-hd-item pull-left art"><i class="icon-yunico "></i>素材库</li>
           <li class="boxsetuptab-hd-item pull-left"><i class="icon-setico "></i>参数设置</li>
        </ul>
     </div>
     <div class="et-contab boxsetuptab-cn">
        <!--------------------- 素材库----------------------------->
        <div class="et-congp boxsetuptab-co-goup mat-box boxtab">
            <div class="mat-ttab boxtab-t">
               <ul class="">
                  <li class="boxtab-t-item distable art">
                     <div class="distablediv">
                        <div>硬装</div>
                        <div>套装</div>
                     </div>
                  </li>
                  <li class="boxtab-t-item distable ">
                     <div class="distablediv">
                        <div>软装</div>
                        <div>套装</div>
                     </div>
                  </li>
                  <li class="boxtab-t-item distable ">
                     <div class="distablediv">
                        <div>配饰</div>
                     </div>
                  </li>
                  <li class="boxtab-t-item distable ">
                     <div class="distablediv">
                        <div>设计</div>
                     </div>
                  </li>
                  <li class="boxtab-t-item distable ">
                     <div class="distablediv">
                        <div>收藏</div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="mat-con boxtab-c">
               <div class="mat-congoup boxtab-c-goup">
                 <div class="mat-classify dropdown-classify">
                     <select name="state" class="defaultdown" tabindex="3" >
                        <option>所有</option>
                        <option>沙发</option> 
                        <option>茶几</option> 
                        <option>电视柜</option> 
                        <option>展示柜</option> 
                        <option>斗柜</option>
                        <option>转椅</option> 
                        <option>休闲椅</option> 
                        <option>边几</option> 
                        <option>餐边柜</option> 
                        <option>床头柜</option>
                        <option>衣柜</option> 
                        <option>餐桌</option> 
                        <option>餐椅</option> 
                        <option>书桌</option> 
                        <option>书柜</option>
                        <option>床</option> 
                        <option>客厅吊灯</option> 
                        <option>卧室吊灯</option> 
                        <option>书房吊灯</option>
                        <option>床头吊灯</option>
                        <option>梳妆台</option>
                        <option>梳妆椅</option> 
                     </select>
                 </div>
                 <div class="mat-group nicescroll_body">
                    <ul class="clearboth">
                       <!-------------  item  ------------------------>
                       <li class="">
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="minuboxm">
                                       <div class="nbpic"><img src="images/img/1.png"></div>
                                       <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                       <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                       <div class="tienm"><span>价格：</span>120元</div>
                                       <div class="cosem">
                                          <div class="tiemw btn_Collection"></div>
                                          <div class="tiemw btn_buy"></div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="minuboxm">
                                       <div class="nbpic"><img src="images/img/1.png"></div>
                                       <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                       <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                       <div class="tienm"><span>价格：</span>120元</div>
                                       <div class="cosem">
                                          <div class="tiemw btn_Collection"></div>
                                          <div class="tiemw btn_buy"></div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="minuboxm">
                                       <div class="nbpic"><img src="images/img/1.png"></div>
                                       <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                       <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                       <div class="tienm"><span>价格：</span>120元</div>
                                       <div class="cosem">
                                          <div class="tiemw btn_Collection"></div>
                                          <div class="tiemw btn_buy"></div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="minuboxm">
                                       <div class="nbpic"><img src="images/img/1.png"></div>
                                       <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                       <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                       <div class="tienm"><span>价格：</span>120元</div>
                                       <div class="cosem">
                                          <div class="tiemw btn_Collection"></div>
                                          <div class="tiemw btn_buy"></div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="minuboxm">
                                       <div class="nbpic"><img src="images/img/1.png"></div>
                                       <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                       <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                       <div class="tienm"><span>价格：</span>120元</div>
                                       <div class="cosem">
                                          <div class="tiemw btn_Collection"></div>
                                          <div class="tiemw btn_buy"></div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="minuboxm">
                                       <div class="nbpic"><img src="images/img/1.png"></div>
                                       <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                       <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                       <div class="tienm"><span>价格：</span>120元</div>
                                       <div class="cosem">
                                          <div class="tiemw btn_Collection"></div>
                                          <div class="tiemw btn_buy"></div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="minuboxm">
                                       <div class="nbpic"><img src="images/img/1.png"></div>
                                       <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                       <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                       <div class="tienm"><span>价格：</span>120元</div>
                                       <div class="cosem">
                                          <div class="tiemw btn_Collection"></div>
                                          <div class="tiemw btn_buy"></div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="minuboxm">
                                       <div class="nbpic"><img src="images/img/1.png"></div>
                                       <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                       <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                       <div class="tienm"><span>价格：</span>120元</div>
                                       <div class="cosem">
                                          <div class="tiemw btn_Collection"></div>
                                          <div class="tiemw btn_buy"></div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="minuboxm">
                                       <div class="nbpic"><img src="images/img/1.png"></div>
                                       <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                       <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                       <div class="tienm"><span>价格：</span>120元</div>
                                       <div class="cosem">
                                          <div class="tiemw btn_Collection"></div>
                                          <div class="tiemw btn_buy"></div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="minuboxm">
                                       <div class="nbpic"><img src="images/img/1.png"></div>
                                       <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                       <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                       <div class="tienm"><span>价格：</span>120元</div>
                                       <div class="cosem">
                                          <div class="tiemw btn_Collection"></div>
                                          <div class="tiemw btn_buy"></div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="minuboxm">
                                       <div class="nbpic"><img src="images/img/1.png"></div>
                                       <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                       <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                       <div class="tienm"><span>价格：</span>120元</div>
                                       <div class="cosem">
                                          <div class="tiemw btn_Collection"></div>
                                          <div class="tiemw btn_buy"></div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li><!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="minuboxm">
                                       <div class="nbpic"><img src="images/img/1.png"></div>
                                       <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                       <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                       <div class="tienm"><span>价格：</span>120元</div>
                                       <div class="cosem">
                                          <div class="tiemw btn_Collection"></div>
                                          <div class="tiemw btn_buy"></div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="minuboxm">
                                       <div class="nbpic"><img src="images/img/1.png"></div>
                                       <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                       <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                       <div class="tienm"><span>价格：</span>120元</div>
                                       <div class="cosem">
                                          <div class="tiemw btn_Collection"></div>
                                          <div class="tiemw btn_buy"></div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       
                    </ul>
                 </div>
               </div>
               <!---------------group------------------------>
               <div class="mat-congoup boxtab-c-goup none">
                 <div class="mat-classify dropdown-classify">
                     <select name="state" class="defaultdown" tabindex="3" >
                        <option>所有</option>
                        <option>沙发</option> 
                        <option>茶几</option> 
                        <option>电视柜</option> 
                        <option>展示柜</option> 
                        <option>斗柜</option>
                        <option>转椅</option> 
                        <option>休闲椅</option> 
                        <option>边几</option> 
                        <option>餐边柜</option> 
                        <option>床头柜</option>
                        <option>衣柜</option> 
                        <option>餐桌</option> 
                        <option>餐椅</option> 
                        <option>书桌</option> 
                        <option>书柜</option>
                        <option>床</option> 
                        <option>客厅吊灯</option> 
                        <option>卧室吊灯</option> 
                        <option>书房吊灯</option>
                        <option>床头吊灯</option>
                        <option>梳妆台</option>
                        <option>梳妆椅</option> 
                     </select>
                 </div>
                 <div class="mat-group nicescroll_body">
                    <ul class="clearboth">
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                    </ul>
                 </div>
               </div>
               <!---------------group------------------------>
               <div class="mat-congoup boxtab-c-goup none">
                 <div class="mat-classify dropdown-classify">
                      <select name="state" class="defaultdown" tabindex="3" >
                        <option>所有</option>
                        <option>沙发</option> 
                        <option>茶几</option> 
                        <option>电视柜</option> 
                        <option>展示柜</option> 
                        <option>斗柜</option>
                        <option>转椅</option> 
                        <option>休闲椅</option> 
                        <option>边几</option> 
                        <option>餐边柜</option> 
                        <option>床头柜</option>
                        <option>衣柜</option> 
                        <option>餐桌</option> 
                        <option>餐椅</option> 
                        <option>书桌</option> 
                        <option>书柜</option>
                        <option>床</option> 
                        <option>客厅吊灯</option> 
                        <option>卧室吊灯</option> 
                        <option>书房吊灯</option>
                        <option>床头吊灯</option>
                        <option>梳妆台</option>
                        <option>梳妆椅</option> 
                     </select>
                 </div>
                 
                 <div class="mat-group nicescroll_body">
                    <ul class="clearboth">
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                    </ul>
                 </div>
               </div>
               <!---------------group------------------------>
               <div class="mat-congoup boxtab-c-goup none">
                 <div class="mat-classify dropdown-classify">
                      <select name="state" class="defaultdown" tabindex="3" >
                        <option>所有</option>
                        <option>沙发</option> 
                        <option>茶几</option> 
                        <option>电视柜</option> 
                        <option>展示柜</option> 
                        <option>斗柜</option>
                        <option>转椅</option> 
                        <option>休闲椅</option> 
                        <option>边几</option> 
                        <option>餐边柜</option> 
                        <option>床头柜</option>
                        <option>衣柜</option> 
                        <option>餐桌</option> 
                        <option>餐椅</option> 
                        <option>书桌</option> 
                        <option>书柜</option>
                        <option>床</option> 
                        <option>客厅吊灯</option> 
                        <option>卧室吊灯</option> 
                        <option>书房吊灯</option>
                        <option>床头吊灯</option>
                        <option>梳妆台</option>
                        <option>梳妆椅</option> 
                     </select>
                 </div>
                 
                 <div class="mat-group nicescroll_body">
                    <ul class="clearboth">
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                    </ul>
                 </div>
               </div>
               <!---------------group------------------------>
               <div class="mat-congoup boxtab-c-goup none">
                 <div class="mat-classify dropdown-classify">
                      <select name="state" class="defaultdown" tabindex="3" >
                        <option>所有</option>
                        <option>沙发</option> 
                        <option>茶几</option> 
                        <option>电视柜</option> 
                        <option>展示柜</option> 
                        <option>斗柜</option>
                        <option>转椅</option> 
                        <option>休闲椅</option> 
                        <option>边几</option> 
                        <option>餐边柜</option> 
                        <option>床头柜</option>
                        <option>衣柜</option> 
                        <option>餐桌</option> 
                        <option>餐椅</option> 
                        <option>书桌</option> 
                        <option>书柜</option>
                        <option>床</option> 
                        <option>客厅吊灯</option> 
                        <option>卧室吊灯</option> 
                        <option>书房吊灯</option>
                        <option>床头吊灯</option>
                        <option>梳妆台</option>
                        <option>梳妆椅</option> 
                     </select>
                 </div>
                 
                 <div class="mat-group nicescroll_body">
                    <ul class="clearboth">
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                       <!-------------  item  ------------------------>
                       <li>
                          <div class="m">
                            <div class="mac">
                                <div class="minu">
                                   <div class="nbpic"><img src="images/img/1.png"></div>
                                   <div class="tienm"><span>品牌：</span>凳子-中型模版Icon</div>
                                   <div class="tienm"><span>厂商：</span>瑞阳科技con</div>
                                   <div class="tienm"><span>价格：</span>120元</div>
                                   <div class="cosem">
                                      <div class="tiemw btn_Collection"></div>
                                      <div class="tiemw btn_buy"></div>
                                   </div>
                                </div>
                            </div>
                             <div class="pic"><img src="images/img/1.png"></div>
                         </div>
                       </li>
                    </ul>
                 </div>
               </div>
            </div>
        </div>
        <!--------------------- 素材库 end ----------------------------->
        <!--参数设置-->
        <div class="et-congp boxsetuptab-co-goup pmt-box none">
           <!----------------------- 参数设置 灯光  ---------------------------------->
           <div class="pmt_row pmt_lighting none" id="pref_lighting">
               <div class="pmt_row_hd pmt_lighting_hd">
                  <div class="ico pull-left"></div>
                  <div class="tname pull-left">灯光</div>
               </div>
               <div class="pmt_row_co nicescroll_body">
                   <form action="" method="get">
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_lighting_snbn">
                      <div class=" pull-left patitem_name ">名称：</div>
                      <div class=" pull-left patitem_ci">
                         <input name="" type="text" class="from_cont from_patitem_cmhfou" value="元素名称">
                      </div>
                   </div>
                     <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem pmt_lighting_stly">
                         <div class="listgroup clearboth">
                            <a hidden="" class="btn_item btn pull-left btn_lighting btncluckadd " title="打开灯光"></a>
                            <a hidden="" class="btn_item btn pull-left btn_shadow btncluckadd" title="打开阴影"></a>
                            <a hidden="" class="btn_item btn pull-left btn_copy btncluckadd" title="复制灯光"></a>
                            <a hidden="" class="btn_item btn pull-left btn_paste btncluckadd" title="粘贴灯光"></a>
                            <a hidden="" class="btn_item btn pull-left btn_Independent btncluckadd" title="物体独立"></a>
                         </div>
                      </div>
                     <!---------------------  item end -------------------------->
                     <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_tyle">
                      <div class=" pull-left patitem_name ">灯光类型:</div>
                      <div class=" pull-left patitem_ci">
                         <div class="dropdown-classify">
                              <select name="state" class="defaultdown" tabindex="3" >
                                <option>点光源</option>
                                <option>锥光源</option> 
                                <option>面光源</option> 
                                <option></option> 
                                <option></option> 
                                <option></option> 
                                
                             </select>
                         </div>
                      </div>
                   </div>
                     <!---------------------  item end -------------------------->
                     <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_protin">
                      <div class=" patitem_name ">纹理设置:</div>
                      <div class=" lightingitem_protin_mov clearboth">
                          <div class="npic pull-left"></div>
                          <div class="info pull-left">
                             <div class="titlename">纹理强度：1.0</div>
                             <a href="" class="btn">删除纹理</a>
                          </div>
                      </div>
                   </div>
                     <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_colorn">
                      <div class=" patitem_name ">更多设置:</div>
                      <div class=" lightingitem_color_con clearboth">
                         <div class=" pull-left">亮度：</div>
                         <div class=" pull-left brightness_cin"><input name="" type="text"  class="from_cont from_brigomu" value="1500.0"></div>
                         <div class=" pull-left">lm</div>
                         <div class=" pull-left lightingitem_color_titl">颜色：</div>
                         <div class=" pull-left lightingitem_color_clinb">
                            <input type="hidden" class=" colorpickerclick" value=" #db913d">
                         </div>
                      </div>
                   </div>
                     <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">亮度倍增</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="width:;"  data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                     <!---------------------  item end -------------------------->
                     <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">仿光天化</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                     <!---------------------  item end -------------------------->
                     <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">阴影浓度</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                     <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">阴影柔化</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                     <!---------------------  item end -------------------------->
                     <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">阴影剪裁</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                     <!---------------------  item end -------------------------->
                     <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">阴影降燥</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                     <!---------------------  item end -------------------------->
                     <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">GI强度</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                     <!---------------------  item end -------------------------->
                     <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">阴影精度</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                     <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">亮度倍增</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                     <!---------------------  item end -------------------------->
                     </form>
                   </div>
                   
           </div>
           <!----------------------- 参数设置 灯光  end  ---------------------------------->
           <!----------------------- 参数设置 相机  ---------------------------------->
           <div class="pmt_row pmt_lighting none" id="pref_camera">
               <div class="pmt_row_hd Camera_pmty_hd">
                  <div class="ico pull-left"></div>
                  <div class="tname pull-left">相机</div>
               </div>
               <div class="pmt_row_co nicescroll_body">
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_lighting_snbn">
                      <div class=" pull-left patitem_name ">名称：</div>
                      <div class=" pull-left patitem_ci">
                         <input name="" type="text" class="from_cont from_patitem_cmhfou" value="相机元素">
                      </div>
                   </div>
                     <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem pmt_lighting_stly">
                         <div class="listgroup clearboth">
                            <a hidden="" class="btn_item btn pull-left btn_Independent btncluckadd" title="物体独立"></a>
                            <a hidden="" class="btn_item btn pull-left btn_copy btncluckadd" title="复制当前相机值"></a>
                            <a hidden="" class="btn_item btn pull-left btn_paste btncluckadd" title="粘贴复制的相机值"></a>
                         </div>
                      </div>
                     <!---------------------  item end -------------------------->
                     <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm pmtitem_renderer—switch pmtitem_renderer—srt">
                      <div class=" patitem_name ">相机滤镜参数:</div>
                   </div>
                   <!---------------------  item end -------------------------->
                     
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">曝光强度</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">固定曝光</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">泛光强度</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">对比度</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">锐化度</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">饱和度</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">色温</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">暗角</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">滤镜索引</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">滤镜强度</div>
                      <div class=" pull-left patitem_ci">
                         <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                     
               </div>
           </div>
           <!----------------------- 参数设置  相机 end  ---------------------------------->
           
           <!----------------------- 参数设置 烘焙AO  ---------------------------------->
           <div class="pmt_row pmt_lighting none" id="pref_baking_ao">
               <div class="pmt_row_hd eakeAO_pmty_hd">
                  <div class="ico pull-left"></div>
                  <div class="tname pull-left">烘焙AO</div>
               </div>
               <div class="pmt_row_co nicescroll_body">
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm">
                      <div class="patitem_name ">纹理尺寸</div>
                      <div class="patitem_ci">
                         <div class="dropdown-classify">
                              <select name="state" class="defaultdown" tabindex="3" >
                                <option>动态分辨率</option>
                                <option>4096 * 4096 分辨率</option> 
                                <option>2048 * 2048 分辨率</option>
                                
                             </select>
                         </div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm">
                      <div class="patitem_name ">尺寸缩放</div>
                      <div class="patitem_ci">
                         <div class="dropdown-classify">
                              <select name="state" class="defaultdown" tabindex="3" >
                                <option>1倍</option>
                                <option>2倍</option> 
                                <option>4倍</option> 
                                
                             </select>
                         </div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm">
                      <div class="patitem_name ">遮挡范围</div>
                      <div class="patitem_ci">
                         <div class="dropdown-classify">
                             <select name="state" class="defaultdown" tabindex="3" >
                                <option>16米衰减</option>
                                <option>8米衰减</option>
                                <option>4米衰减</option>
                                
                             </select>
                         </div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm">
                      <div class="patitem_name ">计算精度</div>
                      <div class="patitem_ci">
                         <div class="dropdown-classify">
                              <select name="state" class="defaultdown" tabindex="3" >
                                <option>低级计算精度</option>
                                <option>中级计算精度</option> 
                                <option>高级计算精度</option> 
                                
                             </select>
                         </div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm">
                      <div class="patitem_name ">通道选择</div>
                      <div class="patitem_ci">
                         <div class="dropdown-classify">
                              <select name="state" class="defaultdown" tabindex="3" >
                                <option>系统自动展开UV纹理</option>
                                <option>模型纹理坐标1</option> 
                                <option>模型纹理坐标2</option> 
                                
                             </select>
                         </div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm">
                      <div class="patitem_name ">遮挡物体</div>
                      <div class="patitem_ci">
                         <div class="dropdown-classify">
                             <select name="state" class="defaultdown" tabindex="3" >
                                <option>仅当前物体</option>
                                <option>全部静态物体</option> 
                                <option>全部物体</option> 
                                
                             </select>
                         </div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm">
                      <div class="patitem_name ">虚拟地面</div>
                      <div class="patitem_ci">
                         <div class="dropdown-classify">
                              <select name="state" class="defaultdown" tabindex="3" >
                                <option>无虚拟地面</option>
                                <option>包围盒低面接地</option> 
                                <option>包围盒顶面接地</option> 
                             </select>
                         </div>
                         
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
               </div>
           </div>
           <!----------------------- 参数设置 烘焙AO end  ---------------------------------->
           <!----------------------- 参数设置 烘焙GI  ---------------------------------->
           <div class="pmt_row pmt_lighting none" id="pref_baking_gi">
               <div class="pmt_row_hd eakegi_pmty_hd">
                  <div class="ico pull-left"></div>
                  <div class="tname pull-left">烘焙GI</div>
               </div>
               <div class="pmt_row_co nicescroll_body">
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm">
                      <div class="patitem_name ">纹理尺寸</div>
                      <div class="patitem_ci">
                         <div class="dropdown-classify">
                              <select name="state" class="defaultdown" tabindex="3" >
                                <option>动态分辨率</option>
                                <option>4096 * 4096 分辨率</option> 
                                <option>2048 * 2048 分辨率</option>
                                
                             </select>
                         </div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm ">
                      <div class="patitem_name ">尺寸缩放</div>
                      <div class="patitem_ci">
                         <div class="dropdown-classify">
                              <select name="state" class="defaultdown" tabindex="3" >
                                <option>1倍</option>
                                <option>2倍</option> 
                                <option>4倍</option> 
                                
                             </select>
                         </div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm">
                      <div class="patitem_name ">遮挡范围</div>
                      <div class="patitem_ci">
                         <div class="dropdown-classify">
                              <select name="state" class="defaultdown" tabindex="3" >
                                <option>16米衰减</option>
                                <option>8米衰减</option>
                                <option>4米衰减</option>
                                
                             </select>
                         </div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm">
                      <div class="patitem_name ">计算精度</div>
                      <div class="patitem_ci">
                         <div class="dropdown-classify">
                              <select name="state" class="defaultdown" tabindex="3" >
                                <option>低级计算精度</option>
                                <option>中级计算精度</option> 
                                <option>高级计算精度</option> 
                                
                             </select>
                         </div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm">
                      <div class="patitem_name ">通道选择</div>
                      <div class="patitem_ci">
                         <div class="dropdown-classify">
                             <select name="state" class="defaultdown" tabindex="3" >
                                <option>系统自动展开UV纹理</option>
                                <option>模型纹理坐标1</option> 
                                <option>模型纹理坐标2</option> 
                                
                             </select>
                         </div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm">
                      <div class="patitem_name ">遮挡物体</div>
                      <div class="patitem_ci">
                         <div class="dropdown-classify">
                            <select name="state" class="defaultdown" tabindex="3" >
                                <option>仅当前物体</option>
                                <option>全部静态物体</option> 
                                <option>全部物体</option> 
                                
                             </select>
                         </div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
               </div>
           </div>
           <!----------------------- 参数设置 烘焙AO end  ---------------------------------->
           
           
           <!----------------------- 参数设置 渲染器  ---------------------------------->
           <div class="pmt_row pmt_lighting none" id="pref_Renderer">
               <div class="pmt_row_hd vive_pmty_hd">
                  <div class="ico pull-left"></div>
                  <div class="tname pull-left">渲染器</div>
               </div>
               <div class="pmt_row_co nicescroll_body">
                  <!---------------------  group -------------------------->
                  <div class="pmtgroup_renderer">
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm pmtitem_renderer—switch">
                      <div class="patitem_name ">渲染器设置</div>
                      <div class="patitem_ci">
                         <div class="viveswitch_brn">打开渲染器</div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">全局光</div>
                      <div class=" pull-left patitem_ci">
                         <div class="pmtrenderer_btnbox">
                            <ul class=" pull-left pmtrenderer_btngroup tabradio">
                               <li class="pull-left  pmtrenderer_btnitem tabradioitem ">低</li>
                               <li class="pull-left  pmtrenderer_btnitem tabradioitem art">中</li>
                               <li class="pull-left  pmtrenderer_btnitem tabradioitem ">高</li>
                            </ul>
                         </div>
                      </div>
                   </div>
                    <!---------------------  item end -------------------------->
                    <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">灯光</div>
                      <div class=" pull-left patitem_ci">
                         <div class="pmtrenderer_btnbox">
                            <ul class=" pull-left pmtrenderer_btngroup tabradio">
                               <li class="pull-left pmtrenderer_btnitem tabradioitem  ">低</li>
                               <li class="pull-left  pmtrenderer_btnitem tabradioitem  art">中</li>
                            </ul>
                         </div>
                      </div>
                   </div>
                    <!---------------------  item end -------------------------->
                    <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">阴影光</div>
                      <div class=" pull-left patitem_ci">
                         <div class="pmtrenderer_btnbox">
                            <ul class=" pull-left pmtrenderer_btngroup tabradio">
                               <li class="pull-left  pmtrenderer_btnitem tabradioitem ">低</li>
                               <li class="pull-left  pmtrenderer_btnitem tabradioitem art">中</li>
                            </ul>
                         </div>
                      </div>
                   </div>
                    <!---------------------  item end -------------------------->
                    <!---------------------  item -------------------------->
                   <div class="patitem clearboth lightingitem_srtm">
                      <div class=" pull-left patitem_name ">抗锯齿</div>
                      <div class=" pull-left patitem_ci">
                         <div class="pmtrenderer_btnbox">
                            <ul class=" pull-left pmtrenderer_btngroup tabradio">
                               <li class="pull-left pmtrenderer_btnitem tabradioitem  ">低</li>
                               <li class="pull-left pmtrenderer_btnitem tabradioitem  art">中</li>
                               <li class="pull-left pmtrenderer_btnitem tabradioitem ">搞</li>
                            </ul>
                         </div>
                      </div>
                   </div>
                    <!---------------------  item end -------------------------->
                  </div>
                   <!---------------------  group end -------------------------->
                   <!---------------------  group -------------------------->
                  <div class="pmtgroup_renderer">
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm pmtitem_renderer—switch pmtitem_renderer—srt">
                      <div class="patitem_name ">天空设置</div>
                      <div class="patitem_ci">
                         <div class="dropdown-classify">
                            <select name="state" class="defaultdown" tabindex="3" >
                                <option>动态天空</option>
                                <option>纹理天空</option> 
                                <option>背景颜色</option>
                             </select>
                         </div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------天空设置 动态天空 -------------------------->
                   <div class=" none">
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">时间</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                         <!---------------------  item end -------------------------->
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti">
                          <div class=" pull-left patitem_name ">方位</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                         <!---------------------  item end -------------------------->
                         <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti">
                          <div class=" pull-left patitem_name ">云量</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                         <!---------------------  item end -------------------------->
                         <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti">
                          <div class=" pull-left patitem_name ">雾气</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                         <!---------------------  item end -------------------------->
                    </div>
                    <!---------------------天空设置 动态天空 end -------------------------->
                    <!---------------------天空设置 纹理天空 -------------------------->
                   <div class=" none ">
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti texturesky_shimg">
                             <input name="" type="file" class="choiceclass">
                             <div class="texturesky_shimg_main">
                             <img src="images/tiwn.jpg" /> </div>
                       </div>
                         <!---------------------  item end -------------------------->
                         
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti">
                          <div class=" pull-left patitem_name ">亮度</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                         <!---------------------  item end -------------------------->
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti">
                          <div class=" pull-left patitem_name ">方向</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                         <!---------------------  item end -------------------------->
                   </div>
                   <!---------------------天空设置 纹理天空 end -------------------------->
                   <!---------------------天空设置 背景颜色 -------------------------->
                   <div class=" ">
                         
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti">
                          <div class=" pull-left patitem_name ">顶部颜色</div>
                          <div class=" pull-left patitem_ci">
                              <div class="texturesky_backgroundcolor" >
                                 <input type="hidden" class=" colorpickerclick" value="#db913d">
                              </div>
                          </div>
                       </div>
                         <!---------------------  item end -------------------------->
                         <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti">
                          <div class=" pull-left patitem_name ">底部颜色</div>
                          <div class=" pull-left patitem_ci">
                              <div class="texturesky_backgroundcolor">
                                 <input type="hidden" class=" colorpickerclick" value=" #db913d">
                              </div>
                          </div>
                       </div>
                         <!---------------------  item end -------------------------->
                         
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti">
                          <div class=" pull-left patitem_name ">亮度</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                         <!---------------------  item end -------------------------->
                   </div>
                   <!---------------------天空设置 背景颜色 end -------------------------->
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth lightingitem_srtm">
                          <div class=" pull-left patitem_name ">背景</div>
                          <div class=" pull-left patitem_ci">
                             <div class="pmtrenderer_btnbox">
                                <ul class=" pull-left pmtrenderer_btngroup tabradio">
                                   <li class="pull-left pmtrenderer_btnitem tabradioitem  ">隐藏</li>
                                   <li class="pull-left pmtrenderer_btnitem tabradioitem  art">显示</li>
                                </ul>
                             </div>
                          </div>
                       </div>
                        <!---------------------  item end -------------------------->
                    
                  </div>
                   <!---------------------  group end -------------------------->
                  <!---------------------  group -------------------------->
                  <div class="pmtgroup_renderer">
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth  pmtitem_renderer—switch pmtitem_renderer—srt">
                      <div class=" pull-left patitem_name ">环境设置</div>
                      <div class=" pull-left patitem_ci">
                        <div class="patitem_panflft">
                         <div class="dropdown-classify">
                             <select name="state" class="defaultdown" tabindex="3" >
                                <option>标准</option>
                                <option>高级</option> 
                             </select>
                         </div>
                         </div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------环境设置 标准 -------------------------->
                   <div class="">
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">阳光亮度</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                         <!---------------------  item end -------------------------->
                         <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">阳光光芒</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                         <!---------------------  item end -------------------------->
                   </div>
                   <!--------------------- 环境设置 标准 end -------------------------->
                   <!--------------------- 环境设置 高级 -------------------------->
                   <div class="">
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">阳光浓度</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                         <!---------------------  item end -------------------------->
                         <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">天光亮度</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                         <!---------------------  item end -------------------------->
                         <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">天光浓度</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                         <!---------------------  item end -------------------------
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">阴影模糊</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                         <!---------------------  item end -------------------------->
                         <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">AO强度</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                         <!---------------------  item end -------------------------->
                         <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">AO范围</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                         <!---------------------  item end -------------------------->
                   </div>
                   <!--------------------- 环境设置 高级 end -------------------------->
                  </div>
                   <!---------------------  group end -------------------------->
                   <!---------------------  group -------------------------->
                  <div class="pmtgroup_renderer">
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth  pmtitem_renderer—switch pmtitem_renderer—srt">
                      <div class=" pull-left patitem_name ">镜头特效</div>
                      <div class=" pull-left patitem_ci">
                        <div class="patitem_panflft">
                         <div class="dropdown-classify">
                            <select name="state" class="defaultdown" tabindex="3" >
                                <option>标准</option>
                                <option>高级</option> 
                             </select>
                         </div>
                         </div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!--------------------- 镜头特效 标准 -------------------------->
                   <div class="">
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">曝光度</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                       <!---------------------  item end -------------------------->
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">泛光强度</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                       <!---------------------  item end -------------------------->
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">对比度</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                       <!---------------------  item end -------------------------->
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">饱和度</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                       <!---------------------  item end -------------------------->
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">色温</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                       <!---------------------  item end -------------------------->
                       
                   </div>
                   <!--------------------- 镜头特效 标准 end -------------------------->
                   <!--------------------- 镜头特效 高级 -------------------------->
                   <div class="">
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">固定曝光</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                       <!---------------------  item end -------------------------->
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">锐化度</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                       <!---------------------  item end -------------------------->
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">暗角</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                       <!---------------------  item end -------------------------->
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">色版风格</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                       <!---------------------  item end -------------------------->
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth pmtitem_landti ">
                          <div class=" pull-left patitem_name ">色版强度</div>
                          <div class=" pull-left patitem_ci">
                             <input class="easyui-slider" style="" data-options="showTip:true,min:0,max:10,tipFormatter:function(value){return (value/10.0).toFixed(2);}">
                          </div>
                       </div>
                       <!---------------------  item end -------------------------->
                      
                   </div>
                   <!--------------------- 镜头特效 高级 end -------------------------->
                  </div>
                   <!---------------------  group end -------------------------->
                   
               </div>
           </div>
           <!----------------------- 参数设置  渲染器 end  ---------------------------------->
           
           <!----------------------- 参数设置 输出全景  ---------------------------------->
           <div class="pmt_row pmt_lighting none" id="pref_panoramao">
               <div class="pmt_row_hd vive_panorama_hd">
                  <div class="ico pull-left"></div>
                  <div class="tname pull-left">输出全景</div>
               </div>
               <div class="pmt_row_co nicescroll_body">
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm">
                      <div class="patitem_name ">分辨率</div>
                      <div class="patitem_ci">
                         <div class="dropdown-classify">
                             <select name="state" class="defaultdown" tabindex="3" >
                                <option>标准{2048}</option>
                                <option>2K{2048}</option> 
                                <option>4K{4096}</option> 
                                
                             </select>
                         </div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm ">
                      <div class="patitem_name ">自定义设置</div>
                      <div class="patitem_ci panorama_ettings">
                         <input name="" type="text" class="from_cont panoramaname">
                         <div class="patitem_ci panorama_ettings clearboth">
                             <div class=" pull-left panoimpurt_box">
                                <input name="" type="file" class="choiceclass">
                                <div class="pon_btn impurt_btn">上传背景音乐</div>
                             </div>
                             <div class="pull-right">
                                <a href="" class="pon_btn del_btn">删除</a>
                             </div>
                         </div>
                         
                         <div class="panorama_ettings panoimpurt_music">
                            陈奕迅 - 不如不见.mp3
                         </div>
                         <div class="patitem_ci panorama_ettings clearboth">
                             <div class=" pull-left panoimpurt_box">
                                <input name="" type="file" class="choiceclass">
                                <div class="pon_btn impurt_btn">上床LOGO图标</div>
                             </div>
                             <div class="pull-right">
                                <a href="" class="pon_btn del_btn">删除</a>
                             </div>
                         </div>
                         <div class="panorama_ettings panoimpurt_impurtlogo">
                            <img src="images/p2-pic_05.jpg"> 
                         </div>
                   </div>
                   <!---------------------  item end -------------------------->
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm patitemhic_moutput">
                      <div class="patitem_ci clearboth ">
                                <input type="submit" class="pon_btn  output_btn" name="" id="" value="输出" />
                         </div>
                   </div>
                   <!---------------------  item end -------------------------->
               </div>
           </div>
           </div>
           <!----------------------- 参数设置  输出全景 end  ---------------------------------->
           <!----------------------- 参数设置 VR体验  ---------------------------------->
           <div class="pmt_row pmt_lighting none" id="pref_vrexperience">
               <div class="pmt_row_hd vive_pmty_hd">
                  <div class="ico pull-left"></div>
                  <div class="tname pull-left">VR体验</div>
               </div>
               <div class="pmt_row_co nicescroll_body">
                   <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_hicm">
                      <div class="patitem_name ">Vive全景头盔</div>
                      <div class="patitem_ci">
                         <div class="viveswitch_brn">Vive  开</div>
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
               </div>
           </div>
           <!----------------------- 参数设置  VR体验 end  ---------------------------------->
           
           <!----------------------- 参数设置 模型属性  ---------------------------------->
           <div class="pmt_row pmt_lighting none" id="pref_modelproperties">
               <div class="pmt_row_hd moublecprompt_pmt">
                  <div class="ico pull-left"></div>
                  <div class="tname pull-left">模型属性</div>
               </div>
               <div class="pmt_row_co nicescroll_body">
                  <!---------------------  item -------------------------->
                   <div class="patitem clearboth patitem_lighting_snbn">
                      <div class=" pull-left patitem_name ">名称：</div>
                      <div class=" pull-left patitem_ci">
                         <input name="" type="text" class="from_cont from_patitem_cmhfou" value="相机元素">
                      </div>
                   </div>
                   <!---------------------  item end -------------------------->
                  <!---------------------  模块标签 -------------------------->
                  <div class="pmtgroup_renderer">
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth patitem_hicm ">
                          <div class="patitem_name ">添加标签</div>
                          <!---------------------  item -------------------------->
                       </div>
                       <!---------------------  item end -------------------------->
                       <div class="modelproperties_sienb">
                          <ul class=" tabradio clearboth">
                              <li class="pull-left morlprromp_collomitem  tabradioitem  art">
                                 <legend class="clearboth">
                                    <input name="" type="radio" value="" class="choiceclass">
                                     <div class="pull-left irncu"></div>
                                     <div class="pull-left text">硬装</div>
                                 </legend>
                              </li>
                              <li class="pull-left morlprromp_collomitem tabradioitem  ">
                                 <legend class="clearboth">
                                    <input name="" type="radio" value="" class="choiceclass">
                                     <div class="pull-left irncu"></div>
                                     <div class="pull-left text">软装</div>
                                 </legend>
                              </li>
                          </ul>
                       </div>
                       <!---------------------  item -------------------------->
                       <div class="patitem clearboth lightingitem_tyle">
                          <div class=" pull-left patitem_name ">分类:</div>
                          <div class=" pull-left patitem_ci">
                             <div class="dropdown-classify">
                                  <select name="state_b" class="defaultdown" tabindex="3" >
                                    <option>边几</option>
                                    
                                 </select>
                             </div>
                          </div>
                       </div>
                     <!---------------------  item end -------------------------->
                     <div class="patitem clearboth patitem_hicm ">
                          <div class="patitem_name ">规格</div>
                          <!---------------------  item -------------------------->
                       </div>
               </div>
           </div>
           <!----------------------- 参数设置  模型属性 end  ---------------------------------->
        
        
     </div>
   </div>
</section>
<!-------------------------- edit end ---------------------->



<!-------------------------- draw unit end ---------------------->
<section class="popup popupbg distable none draw_cont" id="drawunitbox" style=" display:none;">
   <div class="distablediv">
       <div class="popupcontainer  draw_unitcontainer">
          <div class="drawunit_hdnav">
             <ul class=" pull-left group">
                <li class=" pull-left item brnunit_open"></li>
                <li class=" pull-left item brnunit_keep"></li>
                <li class=" pull-left item brnunit_import"></li>
                <li class=" pull-left item brnunit_ruler"></li>
             </ul>
             <ul class=" pull-left group">
                <li class=" pull-left item brnunit_rectanglewall"></li>
                <li class=" pull-left item brnunit_onesidewal"></li>
                <li class=" pull-left item brnunit_window"></li>
                <li class=" pull-left item brnunit_door"></li>
                <li class=" pull-left item brnunit_wallhole"></li>
                <li class=" pull-left item brnunit_pillar"></li>
                <li class=" pull-left item brnunit_box"></li>
                <li class=" pull-left item brnunit_beam"></li>
                <li class=" pull-left item brnunit_backgroundwall"></li>
                <li class=" pull-left item brnunit_furredceiling"></li>
                <li class=" pull-left item brnunit_Floortile"></li>
             </ul>
             <ul class=" pull-left group">
                <li class=" pull-left item brnunit_sofa"></li>
                <li class=" pull-left item brnunit_television"></li>
                <li class=" pull-left item brnunit_table"></li>
                <li class=" pull-left item brnunit_bed"></li>
                <li class=" pull-left item brnunit_desk"></li>
             </ul>
             <ul class=" pull-left group">
                <li class=" pull-left item brnunit_kitchen"></li>
                <li class=" pull-left item brnunit_toilet"></li>
             </ul>
          </div>
          <div class="drawunit_mc clearboth">
             <div class="drawunit_workspace pull-left">
                
            </div>
            <div class="drawunit_rg pull-right">
               <div class="drawunit_sumv"></div>
               <div class="drawunit_buttin">
                  <a href="" class="btn">确定</a>
                  <a href="" class="btn">取消</a>
               </div>
            </div>
          </div>
       </div>
   </div>
</section>
<!-------------------------- draw unit end ---------------------->

<!-------------------------- 设计清单 ---------------------->
<section class="popup distable" id="boxdeisngron" style=" display: none;">
   <div class="distablediv">
     <div class="inventorybox">
        <div class="Closebtn"></div>
        <div class="tinventorybox_hd"><span>设计清单</span></div>
        <div class="tinventorybox_co nicescroll_body">
           <div class="tinventorybox_grow">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tinventorybox_group">
                  <tr>
                    <th scope="row"  width="50">索引</th>
                    <th>图列</th>
                    <th>名称</th>
                    <th>生产商</th>
                    <th>价格</th>
                    <th>用量</th>
                    <th>总价</th>
                  </tr>
                  <tr>
                    <td scope="row">统计</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0.00 元</td>
                  </tr>
                  <tr>
                    <td scope="row">统计</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0.00 元</td>
                  </tr>
                  <tr>
                    <td scope="row">统计</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0.00 元</td>
                  </tr>
                  <tr>
                    <td scope="row">统计</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0.00 元</td>
                  </tr>
                  <tr>
                    <td scope="row">统计</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0.00 元</td>
                  </tr>
                  <tr>
                    <td scope="row">统计</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0.00 元</td>
                  </tr>
                  <tr>
                    <td scope="row">统计</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0.00 元</td>
                  </tr>
                  <tr>
                    <td scope="row">统计</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0.00 元</td>
                  </tr>
                  <tr>
                    <td scope="row">统计</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0.00 元</td>
                  </tr>
                </table>

           </div>
           <div class="tinventorybox_grow">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tinventorybox_group">
                  <tr>
                    <th scope="row" width="50">索引</th>
                    <th>图列</th>
                    <th>名称</th>
                    <th>生产商</th>
                    <th>价格</th>
                    <th>用量</th>
                    <th>总价</th>
                  </tr>
                  <tr>
                    <td scope="row">统计</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0.00 元</td>
                  </tr>
                  <tr>
                    <td scope="row">统计</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0.00 元</td>
                  </tr>
                  <tr>
                    <td scope="row">统计</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0.00 元</td>
                  </tr>
                  <tr>
                    <td scope="row">统计</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0.00 元</td>
                  </tr>
                  <tr>
                    <td scope="row">统计</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0.00 元</td>
                  </tr>
                  <tr>
                    <td scope="row">统计</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0.00 元</td>
                  </tr>
                  <tr>
                    <td scope="row">统计</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0.00 元</td>
                  </tr>
                </table>

           </div>
        </div>
     </div>
  </div>
</section>
<!--文件管理器-->
<section class="popup distable none Filemanagerdom" style="display:none;">
   <div class="distablediv">
     <div class="Filemanager">
        <div class="Filemanager_hd clearboth">
           <div class="pull-left btn arrow_left"></div>
           <div class="pull-left btn arrow_right"></div>
           <div class="pull-left btn arrow_top"></div>
           <div class="pull-left route">
             <input name="" type="text" value=" C:/Users/aihuwang/Desktop/bin/bin/" class="route_text">
           </div>
        </div>
        <div class="Filemanager_co clearboth boxtab ">
           <div class=" pull-left Filemanager_catalog boxtab-t">
              <ul class="boxtab-t">
                 <li class="disk boxtab-t-item"><i></i> <span>本地磁盘（C）</span></li>
                 <li class="disk boxtab-t-item"><i></i> <span>本地磁盘（D）</span></li>
                 <li class="disk boxtab-t-item"><i></i> <span>本地磁盘（F）</span></li>
                 <li class="library boxtab-t-item"><i></i> <span>资源目录</span></li>
                 <li class="library boxtab-t-item"><i></i> <span>场景库</span></li>
                 <li class="library boxtab-t-item"><i></i> <span>角色库</span></li>
                 <li class="library boxtab-t-item"><i></i> <span>网络资源库</span></li>
                 <li class="library boxtab-t-item"><i></i> <span>纹理库</span></li>
              </ul>
           </div>
           <div class=" pull-right Filemanager_filebox boxtab-c ">
              <!----------------geoup ------------------------->
              <div class="Filemanager_filegroup boxtab-c-goup nicescroll_body">
                 <ul class="clearboth">
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">速度快福建省的咖啡机是考虑到积分</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">速度快福建省的咖啡机是考虑到积分</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">速度快福建省的咖啡机是考虑到积分</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">速度快福建省的咖啡机是考虑到积分</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">速度快福建省的咖啡机是考虑到积分</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">速度快福建省的咖啡机是考虑到积分</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">速度快福建省的咖啡机是考虑到积分</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">速度快福建省的咖啡机是考虑到积分</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">速度快福建省的咖啡机是考虑到积分</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                 </ul>
              </div>
              <!----------------geoup end ------------------------->
              <!----------------geoup ------------------------->
              <div class="Filemanager_filegroup boxtab-c-goup nicescroll_body none">
                 <ul class="clearboth">
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">速度快福建省的咖啡机是考虑到积分</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                 </ul>
              </div>
              <!----------------geoup end ------------------------->
              <!----------------geoup ------------------------->
              <div class="Filemanager_filegroup boxtab-c-goup nicescroll_body none">
                 <ul class="clearboth">
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">速度快福建省的咖啡机是考虑到积分</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                 </ul>
              </div>
              <!----------------geoup end ------------------------->
              <!----------------geoup ------------------------->
              <div class="Filemanager_filegroup boxtab-c-goup nicescroll_body none">
                 <ul class="clearboth">
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">速度快福建省的咖啡机是考虑到积分</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                 </ul>
              </div>
              <!----------------geoup end ------------------------->
              <!----------------geoup ------------------------->
              <div class="Filemanager_filegroup boxtab-c-goup nicescroll_body none">
                 <ul class="clearboth">
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">速度快福建省的咖啡机是考虑到积分</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                 </ul>
              </div>
              <!----------------geoup end ------------------------->
              <!----------------geoup ------------------------->
              <div class="Filemanager_filegroup boxtab-c-goup nicescroll_body none">
                 <ul class="clearboth">
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">速度快福建省的咖啡机是考虑到积分</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                 </ul>
              </div>
              <!----------------geoup end ------------------------->
              <!----------------geoup ------------------------->
              <div class="Filemanager_filegroup boxtab-c-goup nicescroll_body none">
                 <ul class="clearboth">
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">速度快福建省的咖啡机是考虑到积分</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                 </ul>
              </div>
              <!----------------geoup end ------------------------->
              <!----------------geoup ------------------------->
              <div class="Filemanager_filegroup boxtab-c-goup nicescroll_body none">
                 <ul class="clearboth">
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">速度快福建省的咖啡机是考虑到积分</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                    <li class=" pull-left item">
                       <div class="fl"></div>
                       <div class="tiel">11212</div>
                    </li>
                 </ul>
              </div>
              <!----------------geoup end ------------------------->
           </div>
        </div>
        <div class="Filemanager_ft clearboth ">
            <div class="pull-left filename">
                <input name="" type="text" value=" 请输入文件名称 " class="filename_text">
            </div>
            <div class="pull-right Filemanager_submit">
               <select name="" class="gormtype">
                  <option>.ract</option>
               </select>
               <input name="" type="button" value="保持" class="btn" />
               <input name="" type="button" value="取消" class="btn Closebtn" />
            </div>
        </div>
     </div>
   </div>
</section>
<section class="et et2">
<div id="fps_container">
    <div id="fps_logger"></div>
</div>

<div id="controls_container">

  <div data-role="page" data-theme="b" data-content-theme="b">

    <div class="text-wrapper">
        <h4>Build: <span id="build_date"></span></h4>
        <h4>Scene: <span id="current_file">Default</span></h4>
        <h4 style="float:left;">Loaded: <span id="loading_progress"></span></h4>
        <h4 style="float:left;">Data ID: <span id="data_id"></span></h4>
        <div id="lights_cont">
            <div id="red_lights"></div>
            <div id="yellow_lights"></div>
            <div id="green_lights"></div>
        </div>
    </div>

    <div class="center-wrapper">
        <div data-role="controlgroup" data-type="horizontal">
            <a href="" id="home" data-role="button" data-icon="home" data-mini="true">Home</a>
            <select id="quality" data-iconpos="left" data-native-menu="false" data-mini="true" >
              <option value="ULTRA">ULTRA Q</option>
              <option value="HIGH">HIGH Q</option>
              <option value="LOW">LOW Q</option>
              <option value="CUSTOM">CUSTOM Q</option>
            </select>
            <a href="" id="reset" data-role="button" data-icon="refresh" data-mini="true">Reset</a>
        </div>
        <div data-role="controlgroup" data-type="horizontal">
            <a href="" id="pause" data-role="button" data-icon="delete" data-mini="true">Pause</a>
            <a href="" id="resume" data-role="button" data-icon="arrow-r" data-mini="true">Resume</a>
            <a href="" id="auto_rotate_cam" data-role="button" data-icon="recycle" data-mini="true">Rotate</a>
        </div>
    </div>

    <div class="scene-settings" data-role="collapsible-set">
        <div data-role="collapsible" data-collapsed="true" class="menu_items">
            <h1>Tools & Debug</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="outlining_overview_mode">Overview outlining mode:</label>
                    <select id="outlining_overview_mode" data-role="slider" data-mini="true">
                        <option value="0">Off</option>
                        <option value="1" selected>On</option>
                    </select>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="canvas_rf">Canvas resolution factor:</label>
                    <input id="canvas_rf" data-highlight="true" value="1" min="1" max="10" type="range" step="1">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <input type="button" value="Make Screenshot"
                        id="make_screenshot" data-inline="true"
                        data-icon="camera" data-mini="true" />
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c debug_view_mode">
                    <label for="debug_view_mode">Debug view modes:</label>
                    <select id="debug_view_mode" name="debug_view_mode" data-native-menu="false" data-mini="true">
                        <option value="DV_NONE" selected="selected">NONE</option>
                        <option value="DV_OPAQUE_WIREFRAME">OPAQUE WIREFRAME</option>
                        <option value="DV_TRANSPARENT_WIREFRAME">TRANSPARENT WIREFRAME</option>
                        <option value="DV_FRONT_BACK_VIEW">FRONT BACK VIEW</option>
                        <option value="DV_BOUNDINGS">BOUNDINGS</option>
                        <option value="DV_CLUSTERS_VIEW">CLUSTER VIEW</option>
                        <option value="DV_BATCHES_VIEW">BATCH VIEW</option>
                        <option value="DV_RENDER_TIME">RENDER TIME</option>
                    </select>
                    <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                        <label for="wireframe_edge_color">Wireframe edge color:</label>
                        <div><div id="wireframe_edge_color" class="color_selector"><div></div></div></div>
                    </div>
                    <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                        <input type="button" value="Change colors" id="debug_change_colors" data-inline="true" data-icon="arrow-r" data-mini="true" />
                    </div>
                    <div class="ui-block-a colapsed_content ui-body ui-body-c">
                        <label for="render_time_threshold">Render Time Threshold (ms):</label>
                        <input id="render_time_threshold" data-highlight="true" value="0.5" min="0" max="10" type="range" step="0.01">
                    </div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="show_hud_debug_info">HUD info:</label>
                    <select id="show_hud_debug_info" data-role="slider" data-mini="true">
                        <option value="0" selected>Off</option>
                        <option value="1">On</option>
                    </select>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="enable_gl_debug">GL debug:</label>
                    <select id="enable_gl_debug" data-role="slider" data-mini="true">
                        <option value="0" selected>Off</option>
                        <option value="1">On</option>
                    </select>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="min_capabilities">Min capabilities mode:</label>
                    <select id="min_capabilities" data-role="slider" data-mini="true">
                        <option value="0" selected>Off</option>
                        <option value="1">On</option>
                    </select>
                </div>
            </div>
        </div>

        <div data-role="collapsible" data-collapsed="true" class="menu_items">
            <h1>Animation</h1>

            <div class="ui-grid-solo">
                <input type="button" value="Play All" id="anim_play_all" data-inline="true" data-icon="arrow-r" data-mini="true" />
                <input type="button" value="Stop All" id="anim_stop_all" data-inline="true" data-icon="delete" data-mini="true" />
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="anim_active_object">Object:</label>
                    <select id="anim_active_object" data-native-menu="false" data-mini="true"></select>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="anim_slot">Animation Slot:</label>
                    <select id="anim_slot" data-native-menu="false" data-mini="true"></select>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="animation">Animation:</label>
                    <select id="animation" data-native-menu="false" data-mini="true"></select>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="anim_cyclic">Cyclic:</label>
                    <div><select id="anim_cyclic" data-role="slider" data-mini="true">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select></div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="anim_frame_range">Range:</label>
                    <span id="anim_frame_range"></span>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="anim_status">Status:</label>
                    <span id="anim_status"></span>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <legend>Playing animation:</legend>
                    <div class="ui-grid-b">
                        <input type="button" value="Play" id="anim_play" data-inline="true" data-icon="arrow-r" data-mini="true" />
                        <input type="button" value="Stop" id="anim_stop" data-inline="true" data-icon="delete" data-mini="true" />
                    </div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="anim_frame_current">Set frame:</label>
                    <input id="anim_frame_current" data-highlight="true" value="0.0" min="0.0" max="1.0" type="range" step="1.0">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="anim_mix_factor">Skeletal mix factor:</label>
                    <input id="anim_mix_factor" data-highlight="true" value="1.0" min="0.0" max="1.0" type="range" step="0.01">
                </div>
            </div>
        </div>

        <div data-role="collapsible" data-collapsed="true">
            <h1>NLA</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="nla_frame_range">Range:</label>
                    <span id="nla_frame_range"></span>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label id="nla_status_caption" for="nla_status">Status:</label>
                    <span id="nla_status"></span>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <legend>Playing NLA:</legend>
                    <div class="ui-grid-b">
                        <div id="nla_playing"></div>
                        <input type="button" value="Play" id="nla_play" data-inline="true" data-icon="arrow-r" data-mini="true" />
                        <input type="button" value="Stop" id="nla_stop" data-inline="true" data-icon="delete" data-mini="true" />
                    </div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="nla_frame_current">Set frame:</label>
                    <input id="nla_frame_current" data-highlight="true" value="0.0" min="0.0" max="1.0" type="range" step="1.0">
                </div>
            </div>
        </div>

        <div data-role="collapsible" data-collapsed="true">
            <h1>Shape Keys</h1>

            <div class="ui-grid-solo">
               <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="shape_key_obj">Object:</label>
                    <select id="shape_key_obj" data-native-menu="false" data-mini="true"></select>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="shape_key_name">Shape key:</label>
                    <select id="shape_key_name" data-native-menu="false" data-mini="true"></select>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="shape_key_value">Set value:</label>
                    <input id="shape_key_value" data-highlight="true" value="0.0" min="0.0" max="1.0" type="range" step="0.01">
                </div>
            </div>
        </div>

        <div data-role="collapsible" data-collapsed="true" class="menu_items">
            <h1>Materials</h1>

            <div class="ui-grid-solo">
                <div id="material_warning" class="warning_information">Warning: section is disabled for node materials and static objects.</div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="material_name">Material:</label>
                    <select id="material_name" data-native-menu="false" data-mini="true"></select>
                </div>
		<div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
		    <label for="texture_name">Texture:</label>
		    <select id="texture_name" data-native-menu="false" data-mini="true"></select> 	
		</div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="material_diffuse_color">Color:</label>
                    <div><div id="material_diffuse_color" class="color_selector"><div></div></div></div>
                </div>
    		<div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
		    <label for="material_diffuse_map" class=""></label>
  	            <div id="change_diffuse_map">
			<form enctype="multipart/form-data" id="change_diffuse_map_form" action="change_diffuse_map.php">
				<input type="file" value="diffuse map" name="material_diffuse_map" id="material_diffuse_map"/>
				<input id="change_map_btn" type="submit" value="change"/>
			</form>
		    </div>		 	
		</div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="material_reflectivity">Reflectivity:</label>
                    <input id="material_reflectivity" data-highlight="true" min="0" max="1.0" value="0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="material_fresnel">Fresnel:</label>
                    <input id="material_fresnel" data-highlight="true" min="0" max="5.0" value="0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="material_fresnel_factor">Fresnel factor:</label>
                    <input id="material_fresnel_factor" data-highlight="true" min="0" max="5.0" value="0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="material_parallax_scale">Parallax scale:</label>
                    <input id="material_parallax_scale" data-highlight="true" min="0" max="0.1" value="0" type="range" step="0.001">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="material_parallax_steps">Parallax steps:</label>
                    <input id="material_parallax_steps" data-highlight="true" min="1" max="30" value="5" type="range" step="1">
                </div>
            </div>
        </div>

        <div data-role="collapsible" data-collapsed="true">
            <h1>Lighting</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="light_name">Light:</label>
                    <select id="light_name" name="light_name" data-native-menu="false" data-mini="true"></select>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="light_type">Type:</label>
                    <label id="light_type"></label>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="light_color">Color:</label>
                    <div><div id="light_color" class="color_selector"><div></div></div></div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="rude_light_energy">Energy coarse:</label>
                    <input id="rude_light_energy" data-highlight="true" min="0" max="100.0" value="0" type="range" step="1">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="pre_light_energy">Energy precise:</label>
                    <input id="pre_light_energy" data-highlight="true" min="0" max="1.0" value="0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="light_energy">Light energy: </label>
                    <label id="light_energy"></label>
                </div>

                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="light_spot_size">Spot size:</label>
                    <input id="light_spot_size" data-highlight="true" min="1" max="180" value="1" type="range" step="1">
                </div>

                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="light_spot_blend">Spot blend:</label>
                    <input id="light_spot_blend" data-highlight="true" min="0" max="1.0" value="0" type="range" step="0.001">
                </div>

                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="light_distance">Distance:</label>
                    <input id="light_distance" data-highlight="true" min="0" max="10000.0" value="0" type="range" step="0.01">
                </div>

                <h3>For sun only:</h3>

                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <legend>Real time sun movement:</legend>
                    <div class="ui-grid-b" id="sn-ui-grid-b">
                        <input type="button" value="Play" id="run_sun" data-inline="true" data-icon="arrow-r">
                        <input type="button" value="Stop" id="stop_sun" data-inline="true" data-icon="delete">
                    </div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="date">Date:</label>
                    <input type="date" id="date" value="2013-08-05" data-highlight="true">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="day_time">Time:</label>
                    <input type="range" id="day_time" value="12.00" min="0.0" max="24.0" step="0.001" data-highlight="true">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="max_sun_angle">Maximum sun vertical angle:</label>
                    <input type="range" id="max_sun_angle" value="60.0" min="0.0" max="90.0" step="0.01" data-highlight="true">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="sun_time_multiplier">Time multiplier:</label>
                    <input type="range" id="sun_time_multiplier" value="1.0" min="0.0" max="1000.0" step="0.1" data-highlight="true">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="sun_horizontal_position">Horizontal position:</label>
                    <input type="range" id="sun_horizontal_position" value="0.0" min="-180.0" max="180.0" step="0.01" data-highlight="true">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="sun_vertical_position">Vertical position:</label>
                    <input type="range" id="sun_vertical_position" value="0.0" min="-180.0" max="180.0" step="0.01" data-highlight="true">
                </div>
            </div>
        </div>

        <div data-role="collapsible" data-collapsed="true">
            <h1>Ambient</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="environment_energy">Environment energy:</label>
                    <input type="range" id="environment_energy" value="0.0" min="0.0" max="3.0" step="0.01" data-highlight="true">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="horizon_color">Horizon color:</label>
                    <div><div id="horizon_color" class="color_selector"><div></div></div></div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="zenith_color">Zenith color:</label>
                    <div><div id="zenith_color" class="color_selector"><div></div></div></div>
                </div>
            </div>
        </div>

        <div data-role="collapsible" data-collapsed="true">
            <h1>Shadows</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <div class="ui-grid-b">
                        <div class="ui-block-a"><label>Resolution:</label></div>
                        <div class="ui-block-b" id="res_ui-block-b"><span id="csm_resolution">?</span></div>
                    </div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="self_shadow_polygon_offset">Self-shadow polygon offset:</label>
                    <input id="self_shadow_polygon_offset" data-highlight="true" value="0.0" min="0.0" max="50.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="self_shadow_normal_offset">Self-shadow normal offset:</label>
                    <input id="self_shadow_normal_offset" data-highlight="true" value="0.0" min="0.0" max="1.0" type="range" step="0.001">
                </div>
                <div id="cascades-info-block" class="ui-block-a colapsed_content ui-body ui-body-c">
                    <legend>Cascades:</legend>
                    <div class="ui-grid-b">
                        <div class="ui-block-a"><label>Number:</label></div>
                        <div class="ui-block-b" id="num_ui-block-b"><span id="csm_num">?</span></div>
                    </div>
                    <div class="ui-grid-b">
                        <div class=""><label>Borders:</label></div>
                        <div class=""><span id="csm_borders">?</span></div>
                    </div>
                </div>
                <div id="csm_first_cascade_border-info-block" class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="csm_first_cascade_border">CSM first cascade border:</label>
                    <input id="csm_first_cascade_border" data-highlight="true" value="0.0" min="0.01" max="1000.0" type="range" step="0.01">
                </div>
                <div id="csm_last_cascade_border-info-block"  class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="csm_last_cascade_border">CSM last cascade border:</label>
                    <input id="csm_last_cascade_border" data-highlight="true" value="0.0" min="0.01" max="1000.0" type="range" step="0.01">
                </div>
                <div id="blur_radii-info-block" class="ui-block-a colapsed_content ui-body ui-body-c">
                    <div class="ui-grid-b">
                        <div class=""><label>Blur radii:</label></div>
                        <div class="" id="blur_ui-block-b"><span id="blur_radii">?</span></div>
                    </div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label id="first_cascade_blur_radius-label" for="first_cascade_blur_radius">First cascade blur radius:</label>
                    <input id="first_cascade_blur_radius" data-highlight="true" value="0.0" min="0.0" max="50.0" type="range" step="0.01">
                </div>

                <div id="last_cascade_blur_radius-info-block" class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="last_cascade_blur_radius">Last cascade blur radius:</label>
                    <input id="last_cascade_blur_radius" data-highlight="true" value="0.0" min="0.0" max="50.0" type="range" step="0.01">
                </div>
            </div>
        </div>


        <div data-role="collapsible" data-collapsed="true">
            <h1>Sky</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="sky_color">Sky color:</label>
                    <div><div id="sky_color" class="color_selector"><div></div></div></div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="rayleigh_brightness">Rayleigh brightness:</label>
                    <input id="rayleigh_brightness" data-highlight="true" value="3.3" min="0.0" max="5.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="mie_brightness">Mie brightness:</label>
                    <input id="mie_brightness" data-highlight="true" value="0.1" min="0.0" max="1.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="spot_brightness">Spot brightness:</label>
                    <input id="spot_brightness" data-highlight="true" value="20.0" min="0.0" max="1000.0" type="range" step="1.0">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="scatter_strength">Scatter_strength:</label>
                    <input id="scatter_strength" data-highlight="true" value="0.2" min="0.0" max="1.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="rayleigh_strength">Rayleigh strength:</label>
                    <input id="rayleigh_strength" data-highlight="true" value="0.2" min="0.0" max="1.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="mie_strength">Mie strength:</label>
                    <input id="mie_strength" data-highlight="true" value="0.006" min="0.0" max="0.1" type="range" step="0.0001">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="rayleigh_collection_power">Rayleigh collection power:</label>
                    <input id="rayleigh_collection_power" data-highlight="true" value="0.5" min="0.0" max="2.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="mie_collection_power">Mie collection power:</label>
                    <input id="mie_collection_power" data-highlight="true" value="0.5" min="0.0" max="2.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="mie_distribution">Mie distribution:</label>
                    <input id="mie_distribution" data-highlight="true" value="0.4" min="0.0" max="2.0" type="range" step="0.01">
                </div>
            </div>
        </div>

        <div data-role="collapsible" data-collapsed="true">
            <h1>Sea</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="shore_smoothing">Shore smoothing:</label>
                    <div><select id="shore_smoothing" data-role="slider" data-mini="true">
                        <option value="0">No</option>
                        <option value="1" selected>Yes</option>
                    </select></div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="absorb_factor">Water absorbtion factor:</label>
                    <input id="absorb_factor" data-highlight="true" value="6.0" min="0.0" max="100.0" type="range" step="1.0">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="water_fog_color">Underwater fog color:</label>
                    <div><div id="water_fog_color" class="color_selector"><div></div></div></div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="water_fog_density">Underwater fog density:</label>
                    <input id="water_fog_density" data-highlight="true" value="0.06" min="0.0" max="1.0" type="range" step="0.0001">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="shallow_water_col">Shallow water color:</label>
                    <div><div id="shallow_water_col" class="color_selector"><div></div></div></div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="shallow_water_col_fac">Shallow water color factor:</label>
                    <input id="shallow_water_col_fac" data-highlight="true" value="2.0" min="0.0" max="2.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="shore_water_col">Shore water color:</label>
                    <div><div id="shore_water_col" class="color_selector"><div></div></div></div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="shore_water_col_fac">Shore water color factor:</label>
                    <input id="shore_water_col_fac" data-highlight="true" value="1.0" min="0.0" max="2.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="foam_factor">Water foam factor:</label>
                    <input id="foam_factor" data-highlight="true" value="0.5" min="0.0" max="1.0" type="range" step="0.001">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="norm_uv_velocity">Normal UV velocity:</label>
                    <input id="norm_uv_velocity" data-highlight="true" value="0.05" min="0.0" max="1.0" type="range" step="0.001">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="water_dynamic">Water dynamic:</label>
                    <div><select id="water_dynamic" data-role="slider" data-mini="true">
                        <option value="0">No</option>
                        <option value="1" selected>Yes</option>
                    </select></div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="sss_strength">SSS strength:</label>
                    <input id="sss_strength" data-highlight="true" value="6.0" min="0.0" max="30.0" type="range" step="0.1">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="sss_width">SSS width:</label>
                    <input id="sss_width" data-highlight="true" value="0.2" min="0.0" max="1.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="waves_height">Waves height:</label>
                    <input id="waves_height" data-highlight="true" value="1.0" min="0.0" max="10.0" type="range" step="0.001">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="waves_length">Waves length:</label>
                    <input id="waves_length" data-highlight="true" value="10.0" min="0.0" max="50.0" type="range" step="1.0">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="dst_noise_scale0">Noise distant scale 0:</label>
                    <input id="dst_noise_scale0" data-highlight="true" value="0.05" min="0.0" max="1.0" type="range" step="0.001">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="dst_noise_scale1">Noise distant scale 1:</label>
                    <input id="dst_noise_scale1" data-highlight="true" value="0.03" min="0.0" max="1.0" type="range" step="0.001">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="dst_noise_freq0">Noise distant frequency 0:</label>
                    <input id="dst_noise_freq0" data-highlight="true" value="1.3" min="0.0" max="10.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="dst_noise_freq1">Noise distant frequency 1:</label>
                    <input id="dst_noise_freq1" data-highlight="true" value="1.0" min="0.0" max="10.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="dir_min_shore_fac">Directional min shore factor:</label>
                    <input id="dir_min_shore_fac" data-highlight="true" value="0.4" min="0.0" max="1.0" type="range" step="0.001">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="dir_freq">Directional waves frequency:</label>
                    <input id="dir_freq" data-highlight="true" value="0.5" min="0.0" max="5.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="dir_noise_scale">Directional noise scale:</label>
                    <input id="dir_noise_scale" data-highlight="true" value="0.05" min="0.0" max="1.0" type="range" step="0.001">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="dir_noise_freq">Directional noise frequency:</label>
                    <input id="dir_noise_freq" data-highlight="true" value="0.07" min="0.0" max="1.0" type="range" step="0.001">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="dir_min_noise_fac">Directional min noise factor:</label>
                    <input id="dir_min_noise_fac" data-highlight="true" value="0.5" min="0.0" max="1.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="dst_min_fac">Distant waves min factor:</label>
                    <input id="dst_min_fac" data-highlight="true" value="0.2" min="0.0" max="1.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c ui-disabled">
                    <label for="waves_hor_fac">Waves horizontal factor:</label>
                    <input id="waves_hor_fac" data-highlight="true" value="20" min="0.0" max="10.0" type="range" step="0.1">
                </div>
            </div>
        </div>

        
        <div data-role="collapsible" data-collapsed="true">
            <h1>Fog</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="fog_intensity">Minimum:</label>
                    <input id="fog_intensity" data-highlight="true" value="0.0" min="0.0" max="1.0" type="range" step="0.001">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="fog_depth">Depth:</label>
                    <input id="fog_depth" data-highlight="true" value="0.0" min="0.0" max="5000.0" type="range" step="0.001">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="fog_start">Start:</label>
                    <input id="fog_start" data-highlight="true" value="0.0" min="0.0" max="5000.0" type="range" step="0.001">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="fog_height">Height:</label>
                    <input id="fog_height" data-highlight="true" value="0.0" min="0.0" max="100.0" type="range" step="0.001">
                </div>
            </div>
        </div> 

        <div data-role="collapsible" data-collapsed="true">
            <h1>Wind</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="wind_dir">Wind direction:</label>
                    <input id="wind_dir" data-highlight="true" min="-180" max="180" value="0" type="range" step="0.1">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="wind_strength">Wind strength:</label>
                    <input id="wind_strength" data-highlight="true" min="0.01" max="10" value="0.0" type="range" step="0.01">
                </div>
            </div>
        </div>

        <div data-role="collapsible" data-collapsed="true">
            <h1>Screen Space Amb Occlus</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c ssao_quality">
                    <label for="ssao_quality">SSAO quality:</label>
                    <select id="ssao_quality" name="ssao_quality" data-native-menu="false" data-mini="true">
                        <option value="SSAO_QUALITY_8">8 samples</option>
                        <option value="SSAO_QUALITY_16">16 samples</option>
                        <option value="SSAO_QUALITY_24">24 samples</option>
                        <option value="SSAO_QUALITY_32">32 samples</option>
                    </select>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="ssao_hemisphere">SSAO use hemisphere:</label>
                    <div><select id="ssao_hemisphere" data-role="slider" data-mini="true">
                        <option value="0" selected>No</option>
                        <option value="1">Yes</option>
                    </select></div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="ssao_blur_depth">SSAO blur depth test:</label>
                    <div><select id="ssao_blur_depth" data-role="slider" data-mini="true">
                        <option value="0" selected>No</option>
                        <option value="1">Yes</option>
                    </select></div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="ssao_blur_discard_value">Blur depth discard:</label>
                    <input id="ssao_blur_discard_value" data-highlight="true" value="0.0" min="0.0" max="2.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="ssao_radius_increase">Radius Increase:</label>
                    <input id="ssao_radius_increase" data-highlight="true" value="0.0" min="0.0" max="15.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="ssao_influence">Influence:</label>
                    <input id="ssao_influence" data-highlight="true" value="0.0" min="0.0" max="1.0" type="range" step="0.005">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="ssao_dist_factor">Distance factor:</label>
                    <input id="ssao_dist_factor" data-highlight="true" value="0.0" min="0.0" max="20.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="ssao_only">SSAO only:</label>
                    <div><select id="ssao_only" data-role="slider" data-mini="true">
                        <option value="0" selected>No</option>
                        <option value="1">Yes</option>
                    </select></div>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="ssao_white">SSAO white:</label>
                    <div><select id="ssao_white" data-role="slider" data-mini="true">
                        <option value="0" selected>No</option>
                        <option value="1">Yes</option>
                    </select></div>
                </div>
            </div>
        </div>

        <div data-role="collapsible" data-collapsed="true">
            <h1>God Rays</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="god_rays_intensity">Intensity:</label>
                    <input id="god_rays_intensity" data-highlight="true" value="0.0" min="0.0" max="5.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="god_rays_max_ray_length">Max ray length:</label>
                    <input id="god_rays_max_ray_length" data-highlight="true" value="0.0" min="0.0" max="5.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="god_rays_steps">Steps:</label>
                    <input id="god_rays_steps" data-highlight="true" value="0.0" min="1.0" max="30.0" type="range" step="1.0">
                </div>
            </div>
        </div>

        <div data-role="collapsible" data-collapsed="true">
            <h1>Bloom</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="bloom_key">Bloom key:</label>
                    <input id="bloom_key" data-highlight="true" value="0.0" min="0.0" max="5.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="bloom_blur">Bloom blur:</label>
                    <input id="bloom_blur" data-highlight="true" value="0.0" min="0.0" max="20.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="bloom_edge_lum">Bloom edge luminance:</label>
                    <input id="bloom_edge_lum" data-highlight="true" value="0.0" min="0.0" max="3.0" type="range" step="0.01">
                </div>
            </div>
        </div>

        <div data-role="collapsible" data-collapsed="true">
            <h1>Motion Blur</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="mb_factor">Motion blur factor:</label>
                    <input id="mb_factor" data-highlight="true" value="0.0" min="0.001" max="1.0" type="range" step="0.001">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="mb_decay_threshold">Motion blur decay threshold:</label>
                    <input id="mb_decay_threshold" data-highlight="true" value="0.0" min="0.0" max="1.0" type="range" step="0.001">
                </div>
            </div>
        </div>

         <div data-role="collapsible" data-collapsed="true">
            <h1>Glow Materials</h1>
            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="small_glow_mask_coeff">Small glow mask intensity:</label>
                    <input id="small_glow_mask_coeff" data-highlight="true" value="2.0" min="0.0" max="10.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="large_glow_mask_coeff">Large glow mask intensity:</label>
                    <input id="large_glow_mask_coeff" data-highlight="true" value="2.0" min="0.0" max="10.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="small_glow_mask_width">Small glow mask width:</label>
                    <input id="small_glow_mask_width" data-highlight="true" value="2.0" min="1.0" max="20.0" type="range" step="0.1">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="large_glow_mask_width">Large glow mask width:</label>
                    <input id="large_glow_mask_width" data-highlight="true" value="6.0" min="1.0" max="20.0" type="range" step="0.1">
                </div>
            </div>
        </div>

        <div data-role="collapsible" data-collapsed="true">
            <h1>Depth of Field</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="dof_object">Focus object:</label>
                    <label id="dof_object"></label>
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="dof_distance">Distance:</label>
                    <input id="dof_distance" data-highlight="true" value="0.0" min="0.0" max="200.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="dof_front_start">Front start:</label>
                    <input id="dof_front_start" data-highlight="true" value="0.0" min="0.0" max="10.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="dof_front_end">Front end:</label>
                    <input id="dof_front_end" data-highlight="true" value="0.0" min="0.0" max="10.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="dof_rear_start">Rear start:</label>
                    <input id="dof_rear_start" data-highlight="true" value="0.0" min="0.0" max="5000.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="dof_rear_end">Rear end:</label>
                    <input id="dof_rear_end" data-highlight="true" value="0.0" min="0.0" max="5000.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="dof_power">Power:</label>
                    <input id="dof_power" data-highlight="true" value="0.0" min="0.0" max="10.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="dof_bokeh_intensity">Bokeh intensity:</label>
                    <input id="dof_bokeh_intensity" data-highlight="true" value="0.0" min="0.0" max="2.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="dof_on">DOF enabled:</label>
                    <div><select id="dof_on" data-role="slider" data-mini="true">
                        <option value="0" selected>No</option>
                        <option value="1">Yes</option>
                    </select></div>
                </div>
            </div>
        </div>

        <div data-role="collapsible" data-collapsed="true">
            <h1>Color correction</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="brightness">Brightness:</label>
                    <input id="brightness" data-highlight="true" value="0.0" min="-1.0" max="1.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="contrast">Contrast:</label>
                    <input id="contrast" data-highlight="true" value="0.0" min="-1.0" max="1.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="exposure">Exposure:</label>
                    <input id="exposure" data-highlight="true" value="0.0" min="0.0" max="2.0" type="range" step="0.01">
                </div>
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="saturation">Saturation:</label>
                    <input id="saturation" data-highlight="true" value="0.0" min="0.0" max="2.0" type="range" step="0.01">
                </div>
            </div>
        </div>

        <div data-role="collapsible" data-collapsed="true">
            <h1>Audio</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <label for="sfx_mix_mode">Mixer:</label>
                    <select id="sfx_mix_mode" data-role="slider" data-mini="true">
                        <option value="0" selected>Off</option>
                        <option value="1">On</option>
                    </select>
                </div>
            </div>
        </div>

        <div data-role="collapsible" data-collapsed="true">
            <h1>Stereo View</h1>

            <div class="ui-grid-solo">
            <div class="ui-block-a colapsed_content ui-body ui-body-c stereo">
                <label for="stereo">Stereo types:</label>
                <select id="stereo" name="stereo" data-native-menu="false" data-mini="true">
                    <option value="NONE" selected="selected">NONE</option>
                    <option value="ANAGLYPH">ANAGLYPH</option>
                    <option value="HMD">HMD</option>
                </select>
                <div id="hmd_conf_tmp">
                    <label for="hmd_settings">HMD Settings:</label>
                    <a href="" id="hmd_settings" data-role="button" data-mini="true">Show</a>
                </div>
            </div>
            </div>

            Use "[" and "]" keys to control the distance to convergence plane.
        </div>

        <div data-role="collapsible" data-collapsed="true">
            <h1>Input Devices</h1>

            <div class="ui-grid-solo">
                <div class="ui-block-a colapsed_content ui-body ui-body-c">
                    <div id="gyro_use_tmp">
                        <label for="gyro_use">Gyroscope use:</label>
                        <select id="gyro_use" data-role="slider" data-mini="true">
                            <option value="0" selected>No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <label for="gmpd_settings">Gamepad settings:</label>
                    <select id="gmpd_settings" data-role="slider" data-mini="true">
                            <option value="0" selected>Hide</option>
                            <option value="1">Show</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
  </div> </div></section>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>
