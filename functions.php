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