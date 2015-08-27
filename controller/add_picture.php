<?php 
// echo '<pre>';
// var_dump($_FILES);
if (isset($_FILES['image'])&&$_FILES['image']['error']=='') 
	save_image($_FILES['image']);

$content_template_name='add_picture.php';
include 'view/base.php';
