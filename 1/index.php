<?php 
require_once '_globals.php';
require_once '_initialize.php';
$title = 'HHHHHHHHHH';
$content = '<h1>Main page</h1>';
$head = '';
$s = $_SESSION;
$content .= '<a href="/?initialize=true">Initialize</a>';
include 'items_output.php';
include '_t.php';
?>