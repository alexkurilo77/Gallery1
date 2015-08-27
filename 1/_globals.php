<?php 
session_start();
function base_conn(){
	return mysqli_connect('localhost', 'root', '', 'slabel');
}
function is_sysadmin($name){
	global $conn, $s;
	$query = mysqli_query($conn, "
		select * from users where name='{$s['user']}'
		");
	$user = mysqli_fetch_assoc($query);
	return $user['sysadmin'];
}
$conn = base_conn();
$p = $_POST;
$g = $_GET;
$s = &$_SESSION;
if ($s['user']) {
	$is_logged_in = True;
	$current_user = $s['user'];
} else {
	$is_logged_in = False;
}
 ?>