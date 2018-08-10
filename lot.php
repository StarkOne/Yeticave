<?php
  require_once('functions.php');
  require_once('data.php');

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
  }

  if(!isset($arr_prod[$id])){
    http_response_code(404);
  }
  $product = $arr_prod[$id];

  $pr = temple_add('lot', ['product'=> $product, 'time' => $time]);
  print(temple_add('layout', ['user_name'=> $user_name,'user_avatar'=> $user_avatar,'is_auth'=> $is_auth, 'title' => 'Главная страница', 'cont' => $pr, 'arr' => $arr]));