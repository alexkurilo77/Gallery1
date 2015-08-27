<?php 
require_once '_globals.php';
$is_registering = True;
if (empty($p['name']) || empty($p['pass'])) {
	$content = 'AAAAAAAAAAAAAAA!!!!!!!!!!!!!!!!';
} else {
	$hased_pass = md5($p['pass']);
	$query = "
		INSERT INTO users(name, email, password)
		values('{$p['name']}','{$p['email']}','{$hased_pass}')
		";
	mysqli_query($conn, $query);
}
include '_t.php';
 ?>