<?php
// ставки пользователей, которыми надо заполнить таблицу
$bets = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];
$is_auth = (bool) rand(0, 1);
$user_name = 'Владислав';
$user_avatar = 'img/user.jpg';
date_default_timezone_set('europe/moscow');
$timestamp = strtotime('tomorrow midnight');
$timenow = time();
$t = $timestamp - $timenow;
$min = $t % 3600;
$time = floor($t / 3600) . " часов и " . floor($min / 60) . " минут";
$arr = ['Доски и лыжи','Крепления','Ботинки','Одежда','Инструменты','Разное'];
$arr_prod = [
		['Название' => '2014 Rossignol Distict Showboard', 'Категория' => 'Доски и лыжи', 'Цена' => '10999', 'url' => 'img/lot-1.jpg'],
		['Название' => 'DC Ply Mens 2016/2017 Showboard', 'Категория' => 'Доски и лыжи', 'Цена' => '159999', 'url' => 'img/lot-2.jpg'],
		['Название' => 'Крепление Union Contact Pro 2015 года размера L/XL', 'Категория' => 'Крепления', 'Цена' => '8000', 'url' => 'img/lot-3.jpg'],
		['Название' => 'Ботинки для сноуборда DC Mutiny Charocal', 'Категория' => 'Ботинки', 'Цена' => '10999', 'url' => 'img/lot-4.jpg'],
		['Название' => 'Куртка для сноуборда DC Mutiny Charocal', 'Категория' => 'Одежда', 'Цена' => '7500', 'url' => 'img/lot-5.jpg'],
		['Название' => 'Маска Oakley Canopy', 'Категория' => 'Разное', 'Цена' => '5400', 'url' => 'img/lot-6.jpg']
	];