<?php
require_once '_globals.php';
$g = $_GET;
if(!$conn){
	if (isset($g['initialize'])){
		$base_conn = mysqli_connect('localhost', 'root', '');
		mysqli_query($base_conn, 'CREATE DATABASE slabel');
		$conn = base_conn();
		initialize_table($conn);
	}
};
$query = mysqli_query($conn, 'select * from users limit 0');
if (!$query && isset($g['initialize'])) {
	$content .= '<a href="/?initialize=true">Initialize</a>';
	initialize_table($conn);
}
function initialize_table($c){
	mysqli_query($c, '
		CREATE Table users(
			id INT AUTO_INCREMENT PRIMARY KEY,
			name VARCHAR(50) UNIQUE NOT NULL,
			email VARCHAR(50) UNIQUE,
			password varchar(100) NOT NULL,
			sysadmin BOOL default False
		)');
	mysqli_query($c, '
		CREATE Table items(
			id INT AUTO_INCREMENT PRIMARY KEY,
			name VARCHAR(50) NOT NULL,
			type VARCHAR(50) not null,
			price INT NOT NULL,
			count int default 0
		)');
	header('Location: '.$_SERVER['PHP_SELF']);
}
