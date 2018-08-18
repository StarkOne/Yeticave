<?php
	require_once('functions.php');
	require_once('data.php');

	$newArr = [];
	if($_COOKIE > 0) {
		$j = count($arr_prod) - 1;
		$num = json_decode($_COOKIE['arr']);
		foreach ($num as $key ) {
			$newArr[] = $arr_prod[$key];
		};
	}


	$pr = temple_add('history', ['newArr'=> $newArr, 'time' => $time]);
	print(temple_add('layout', ['user_name'=> $user_name,'user_avatar'=> $user_avatar,'is_auth'=> $is_auth, 'title' => 'Главная страница', 'cont' => $pr, 'arr' => $arr]));