<!DOCTYPE html>
<html>
<head>
    <title>Cartoon Interior Designer | Blend4Web</title>
    <meta name="description" content="Furnish your room using cartoon furniture items." />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="cartoon_interior.css" rel="stylesheet" type="text/css"/>
    <link href="media.css" rel="stylesheet" type="text/css"/>
    <!--<script type="text/javascript" src="ext/animation.js"></script>-->
    <script type="text/javascript" src="b4w.min.js"></script>
    <!--<script type="text/javascript" src="addons/app.js"></script>
    <script type="text/javascript" src="ext/camera.js"></script>
    <script type="text/javascript" src="ext/container.js"></script>
    <script type="text/javascript" src="ext/controls.js"></script>
    <script type="text/javascript" src="ext/data.js"></script>-->
<script type="text/javascript">
<?php
$objs = glob('blend_data/*.json');
$js_array = json_encode($objs);
echo "var objs = ".$js_array.";\n";
?>
</script>
<script type="text/javascript" src="cartoon_interior.js"></script>
</head>

<body>

<div id="controls-container">
    <div class="top-line"></div>

    <div class="bottom-line">
<div>
<form> 
<input type="file" name="furniture"/>
<input type="submit" value="add furniture"/>
</form>
</div>
        <div class="button-container">
            <div class="delete-container button data-button">
                <div id="delete"></div>
            </div>
            <div id="load-1" class="button data-button"></div>
            <div id="load-2" class="button data-button"></div>
            <div id="load-3" class="button data-button"></div>
            <div id="load-4" class="button data-button"></div>
            <div id="load-5" class="button data-button"></div>

            <div class="rot-button-container">
                <div class="button rotation-button rotation-button-left">
                    <div id="rot-ccw"></div>
                </div>
                <div class="button rotation-button rotation-button-right">
                    <div id="rot-cw"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="main_canvas_container"></div>
</body>
</html>
