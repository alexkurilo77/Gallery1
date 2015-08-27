<?php

// Если нет соединения с базой данных либо если попытка выборки из юзеров возвращает False(это значит, что таблицы не существует)
if(!$conn || !mysqli_query($conn, 'select * from users limit 0')){
	// Инициализация только в случае, если есть гет параметр initialize
	if (isset($g['initialize'])){
		// создаем соединение с MySQL без спецификации базы
		$initial_conn = mysqli_connect($db['host'], $db['user'], $db['password']);
		// Удалим старую базу, если она есть
		mysqli_query($initial_conn, 'DROP DATABASE slabel');
		// создаем базу
		mysqli_query($initial_conn, 'CREATE DATABASE slabel');
		// соединяемся с новой базой
		$conn = base_conn();
		// Создаем таблицы
		initialize_table($conn);
	} else {
		// Если нет гет параметра - добавляем ссылку на инициализацию базы
		$content .= '<a href="/?initialize=true">Initialize</a>';
	}
};

// Создаем таблицы и перенаправляем юзера в корень сайта, чтобы избежать бесконечного цикла
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

