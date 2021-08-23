<?php

$connection = mysqli_connect('127.0.0.1','mysql','','db_for_tnwm'); //подключение к БД ('IP', 'логин', 'пароль', 'имя базы')

if ($connection == false) //оповещение на случай неудачного подключения
{
	echo 'При подключении к базе данных произошла ошибка!<br>';
	echo mysqli_connect_error();
	exit();
}
?>
