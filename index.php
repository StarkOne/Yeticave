<?php
	require_once('functions.php');
	require_once('data.php');

	date_default_timezone_set('europe/moscow');
	$timestamp = strtotime('tomorrow midnight');
	$timenow = time();
	$t = $timestamp - $timenow;
	$min = $t % 3600;
	$time = floor($t / 3600) . " часов и " . floor($min / 60) . " минут";

	function price_prod($price) {
		$price = ceil($price);
		if($price > 1000) {
			$price = number_format($price, 0, '', ' ');
		}
		return $price . "<b class='rub'>р</b>";
	}

	$pr = temple_add('index', ['arr_prod'=> $arr_prod, 'time' => $time]);
	print(temple_add('layout', ['user_name'=> $user_name,'user_avatar'=> $user_avatar,'is_auth'=> $is_auth, 'title' => 'Главная страница', 'cont' => $pr, 'arr' => $arr]));