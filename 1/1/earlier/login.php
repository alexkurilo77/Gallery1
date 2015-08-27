<?php 
require_once '_globals.php';
// Подсказываем темплейту добавить форму регистрации на страницу
array_push($content_templates, '_r_form');
// Отмечаем, что мы только логинимся, значит поле имейла нам не нужно
$just_login = True;

// Если введены имя и пароль
if (!empty($p['name']) && !empty($p['pass'])) {
    // Получаем юзера из базы
	$users = mysqli_query($conn, "
		select name, password from users where name = '{$p['name']}'
		");
	$user = mysqli_fetch_row($users);
    // Если найден юзер и шифрованые пароли совпадают
	if ($user && $user[1] == md5($p['pass'])) {
        // записываем юзера в сессию
		$s['user'] = $user[0];
        // редирект на главную
		header('Location: /');
	} else 
        $content .= 'NO!!!!';
} else{
	$content .= 'NO!!!!';
}
include '_t.php';
 ?>