<?php 
require_once '_globals.php';
// Просто удаляем юзера из сессии. Не уничтожаем сессию полностью, на случай если там еще что-то важное
unset($s['user']);
header('Location: /'); ?>