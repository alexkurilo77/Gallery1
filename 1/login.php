<?php 
require_once '_globals.php';
$is_registering = True;
$just_login = True;
if (!empty($p['name']) && !empty($p['pass'])) {
	$users = mysqli_query($conn, "
		select name, password from users where name = '{$p['name']}'
		");
	$user = mysqli_fetch_row($users);
	if ($user && $user[1] == md5($p['pass'])) {
		$s['user'] = $user[0];
		header('Location: /');
	} else $content .= 'NO!!!!';
} else{
	
}

include '_t.php';
 ?>