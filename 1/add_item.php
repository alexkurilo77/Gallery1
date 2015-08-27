<?php 
require_once '_globals.php';
$is_adding = True;
if (!is_sysadmin($s['user'])) {
	header('Location: /');
	die();
}
if (empty($p['name']) || empty($p['price']) || empty($p['type'])) {
	$content = 'добавьте позицию контента';
} else {
	$p['count'] = $p['count'] ? $p['count'] : 0;
	$query = "
		INSERT INTO items(name, price, type, count)
		values('{$p['name']}',{$p['price']},'{$p['type']}',{$p['count']})
		";
	$content .= $query;
	mysqli_query($conn, $query);
}
include '_t.php';
 ?>