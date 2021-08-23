<?php

$connection = mysqli_connect('127.0.0.1','mysql','','db_for_tnwm');

if ($connection == false)
{
	echo 'При подключении к базе данных произошла ошибка!<br>';
	echo mysqli_connect_error();
	exit();
}
?>