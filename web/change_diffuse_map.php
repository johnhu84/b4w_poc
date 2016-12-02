<?php
echo "changing diffuse map...";
print_r($_POST);
print_r($_FILES);
if ($_FILES['material_diffuse_map']['name']) {
	print_r($_FILES['material_diffuse_map']);
	if (move_uploaded_file($_FILES['material_diffuse_map']['tmp_name'], '/var/www/html/web/blend_data/change_img/'.$_FILES['material_diffuse_map']['name'])) {
		echo "successfully moved file";
	}
}
?>
