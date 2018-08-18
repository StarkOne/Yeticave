<?php
	session_start();
  if($_SESSION > 0) {
  	unset($_SESSION['auth']);
  	unset($_SESSION['name']);
  }
  header('location: index.php');