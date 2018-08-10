<?php
  require_once('functions.php');
  require_once('data.php');
  $error = [];

  if(count($_POST) > 0) {
    if(!(isset($_POST['lot-name']) && $_POST['lot-name'] != '')) {
      $error[] = 'lot-name';
    }
    if(!(isset($_POST['category']) && $_POST['category'] != 'Выберите категорию')) {
      $error[] = 'category';  
    }
    if(!(isset($_POST['message']) && $_POST['message'] != '')) {
      $error[] = 'message';
    }
    if(!(isset($_FILES['main-file']) && $_FILES['main-file'] != '')) {
      $error[] = 'main-file';
    } else {
      $path = $_FILES['main-file']['name'];
      $res = move_uploaded_file($_FILES['main-file']['tmp_name'], 'img/' . $path);
    }
    if(!(isset($_POST['lot-rate']) && filter_var($_POST['lot-rate'], FILTER_VALIDATE_INT) && $_POST['lot-rate'] != '')) {
      $error[] = 'lot-rate';
    }
    if(!(isset($_POST['lot-step']) && filter_var($_POST['lot-step'], FILTER_VALIDATE_INT) && $_POST['lot-step'] != '')) {
      $error[] = 'lot-step';
    }
    if(!(isset($_POST['lot-date']) && $_POST['lot-date'] != '')) {
      $error[] = 'lot-date';
    }
  }


  $pr = temple_add('add-lot', ['error' => $error]);
	print(temple_add('layout', ['user_name'=> $user_name,'user_avatar'=> $user_avatar,'is_auth'=> $is_auth, 'title' => 'Добавить', 'cont' => $pr, 'arr' => $arr]));