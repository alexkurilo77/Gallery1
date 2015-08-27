<?php 
require_once '_globals.php';
// Сообщаем форме в темплейте, что нам нужен вариант для регистрации(с полем для имейла)
array_push($content_templates, '_r_form');
// Если введены имя и пароль
if (!empty($p['name']) || !empty($p['pass'])) {
    // Получаем количество юзеров из базы
    $user_count = mysqli_query($conn, 'SELECT COUNT(*) FROM users');
    // Получить значение первой строки результата(у нас всего одно поле - с количеством пользователей). Если у нас нет юзеров, в переменной будет True благодаря восклицательному знаку(0 преобразуется False и затем в True благодаря ему) иначе - False(любое число преобразуется в True, затем в False благодаря восклицательному знаку). Затем мы преобразуем логическое значение в числовое, чтобы нас поняла база данных. В результате первый зарегистрировавшийся юзер будет админом, остальные - нет
    $make_sysadmin = intval(!mysqli_fetch_row($user_count)[0]);

    // сохраняем шифрованную версию пароля
	$hashed_pass = md5($p['pass']);
    // создаем строку запроса
	$query = "
		INSERT INTO users(name, email, password, sysadmin)
		values('{$p['name']}','{$p['email']}','{$hashed_pass}', {$make_sysadmin})
		";
    // выполняем запрос на создание пользователя
    // В случае успеха вернется True, иначе - False
	if(mysqli_query($conn, $query))
        $content = "Congrats, {$p['name']}";
    else
        $content = "Sorry, {$p['name']}, something wrong...";
}
include '_t.php';
 ?>