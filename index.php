<?php
	require_once('functions.php');
	$is_auth = (bool) rand(0, 1);

	$user_name = 'Владислав';
	$user_avatar = 'img/user.jpg';
	$arr = ['Доски и лыжи','Крепления','Ботинки','Одежда','Инструменты','Разное'];
	$arr_prod = [
		['Название' => '2014 Rossignol Distict Showboard', 'Категория' => 'Доски и лыжи', 'Цена' => '10999', 'url' => 'img/lot-1.jpg'],
		['Название' => 'DC Ply Mens 2016/2017 Showboard', 'Категория' => 'Доски и лыжи', 'Цена' => '159999', 'url' => 'img/lot-2.jpg'],
		['Название' => 'Крепление Union Contact Pro 2015 года размера L/XL', 'Категория' => 'Крепления', 'Цена' => '8000', 'url' => 'img/lot-3.jpg'],
		['Название' => 'Ботинки для сноуборда DC Mutiny Charocal', 'Категория' => 'Ботинки', 'Цена' => '10999', 'url' => 'img/lot-4.jpg'],
		['Название' => 'Куртка для сноуборда DC Mutiny Charocal', 'Категория' => 'Одежда', 'Цена' => '7500', 'url' => 'img/lot-5.jpg'],
		['Название' => 'Маска Oakley Canopy', 'Категория' => 'Разное', 'Цена' => '5400', 'url' => 'img/lot-6.jpg']
	];

		function price_prod($price) {
			$price = ceil($price);
			if($price > 1000) {
				$price = number_format($price, 0, '', ' ');
			}
			return $price . "<b class='rub'>р</b>";
		}

	$pr = temple_add('index', ['arr_prod'=> $arr_prod]);
	print(temple_add('layout', ['user_name'=> $user_name,'user_avatar'=> $user_avatar,'is_auth'=> $is_auth, 'title' => 'Главная страница', 'cont' => $pr, 'arr' => $arr]));