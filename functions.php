<?php
	
	function temple_add($path, $new_arr) {
		if(file_exists('templates/' . $path . '.php')) {
			extract($new_arr);
			ob_start();
			$item = require_once('templates/' . "$path" . '.php');
			return $end = ob_get_clean();
		} else {
			return "";
		}
	}
	function price_prod($price) {
    $price = ceil($price);
    if($price > 1000) {
      $price = number_format($price, 0, '', ' ');
    }
    return $price . "<b class='rub'>р</b>";
  }