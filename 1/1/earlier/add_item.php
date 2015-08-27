<?php 
require_once '_globals.php';
array_push($content_templates, '_item_form');
// Шлем подальше не админов
if (!is_sysadmin($s['user'])) {
	header('Location: /');
	die();
}

if (empty($p['name']) || empty($p['price']) || empty($p['type'])) {
	$content = 'AAAAAAAAAAAAAAA!!!!!!!!!!!!!!!!';
} else {
	$p['count'] = $p['count'] ? $p['count'] : 0;
	$query = "
		INSERT INTO items(name, price, type, count)
		values('{$p['name']}',{$p['price']},'{$p['type']}',{$p['count']})
		";
	$content = $content . $query;
	mysqli_query($conn, $query);
}

include '_t.php';
 ?>