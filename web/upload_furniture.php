<?php
$locale = "en_US.utf-8";
setlocale(LC_ALL, $locale);
putenv("LC_ALL=".$locale);

if($_FILES["furniture"]["name"]) {
print_r($_FILES["furniture"]);	
$filename = $_FILES["furniture"]["name"];
	$source = $_FILES["furniture"]["tmp_name"];
	$type = $_FILES["furniture"]["type"];
	
	$name = explode(".", $filename);
	$accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
	foreach($accepted_types as $mime_type) {
		if($mime_type == $type) {
			$okay = true;
			break;
		} 
	}
	
	$continue = strtolower($name[1]) == 'zip' ? true : false;
	if(!$continue) {
		$message = "The file you are trying to upload is not a .zip file. Please try again.";
	}

	$target_path = "/var/www/html/web/furniture_zips/".$filename;  // change this to the correct site path
	if(move_uploaded_file($source, $target_path)) {
		$zip = new ZipArchive();
		$x = $zip->open($target_path);
		if ($x === true) {
			$zip->extractTo("/var/www/html/web/furniture_zips"); // change this to the correct site path
			$zip->close();
	
			unlink($target_path);
		}
		$message = "Your .zip file was uploaded and unpacked.";
	} else {	
		$message = "There was a problem with the upload. Please try again.";
	}
	echo $message;
	echo pathinfo($filename, PATHINFO_FILENAME);
	$output_msg = shell_exec('/usr/bin/blender --background --python python/myscript.py "/var/www/html/web/furniture_zips" "'.pathinfo($filename, PATHINFO_FILENAME).'"');
	echo $output_msg;
	$output_msg = shell_exec('python3 /home/huchunlin/blend4web_ce_16_10/blend4web_ce/scripts/converter.py -d "/var/www/html/web/furniture_zips" convert_dds');
	echo $output_msg;
	$output_msg = shell_exec('python3 python/resize_to_4.py "/var/www/html/web/furniture_zips"');
	echo $output_msg;
	
}
?>
