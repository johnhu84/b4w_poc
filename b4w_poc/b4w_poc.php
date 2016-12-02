<!DOCTYPE html>
<html>

<head>
<title>proof of concept for blend4web</title>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width" />

<link type='text/css' rel='stylesheet' href='b4w_poc.min.css'/>

<script type='text/javascript' src='common/b4w.simple.min.js'></script>
<script type="text/javascript">
<?php
$objs = glob('blend_data/*.json');
$js_array = json_encode($objs);
echo "var objs = ".$js_array.";\n";
?>
</script>
<!--<script type='text/javascript' src='common/b4w_poc.min.js'></script>-->
<script type="text/javascript" src="b4w_poc.js"></script>

</head>

<body>

<div id="main_canvas_container"></div>
<div id="control_container"><form></form></div>
</body>

</html>
