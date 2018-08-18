<?php
  require_once('functions.php');
  require_once('data.php');
  session_start();
  
  if(isset($_GET['id'])) {
    $id = $_GET['id'];
  }

  if($_COOKIE > 0) {
    $COOK = json_decode($_COOKIE['COOK']);
    $COOK[] = $id;
    $COOK = array_unique($COOK);
    $COOK = json_encode($COOK);
    setcookie('COOK', $COOK, time() + 3600 * 24 * 7, '');
  } else {
    $COOK[] = $id;
    $str = json_encode($COOK);
    setcookie('COOK', $str, time() + 3600 * 24 * 7, '');
  }

  if(!isset($arr_prod[$id])){
    http_response_code(404);
  }
  $product = $arr_prod[$id];

  $pr = temple_add('lot', ['product'=> $product, 'time' => $time]);
  print(temple_add('layout', ['user_name'=> $user_name,'user_avatar'=> $user_avatar,'is_auth'=> $is_auth, 'title' => 'Главная страница', 'cont' => $pr, 'arr' => $arr]));