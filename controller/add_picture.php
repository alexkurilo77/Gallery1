<?php 
// echo '<pre>';
// var_dump($_FILES);
if (isset($_FILES['image'])&&$_FILES['image']['error']=='') {
	$tmp_name = save_image($_FILES['image']);
	insert_path_image($tmp_name);
}

$content_template_name='add_picture.php';
include 'view/base.php';
