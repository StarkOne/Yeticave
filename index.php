<?php
	require_once('functions.php');
	require_once('data.php');
	session_start();

	$pr = temple_add('index', ['arr_prod'=> $arr_prod, 'time' => $time]);
	print(temple_add('layout', ['user_name'=> $user_name,'user_avatar'=> $user_avatar,'is_auth'=> $is_auth, 'title' => 'Главная страница', 'cont' => $pr, 'arr' => $arr]));