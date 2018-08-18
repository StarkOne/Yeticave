<?php
  session_start();
	require_once('functions.php');
	require_once('data.php');
	require_once('userdata.php');
  $error = false;
  if($_POST > 0) {
    if(isset($_POST['email']) && $_POST['email'] !== '' && isset($_POST['password']) && $_POST['password'] !== '') {
      $email = $_POST['email'];
      $password = $_POST['password'];
      
      $usersNun = count($users) - 1;
      for ($i=0; $i < $usersNun ; $i++) { 
        if($users[$i]['email'] == $email && password_verify($password ,$users[$i]['password'])) {
          $_SESSION['auth'] = true;
          $_SESSION['name'] = $users[$i]['name'];
          header('Location: index.php');
        }
      }
      $message = "Неправильный логин или пароль.";

    } else {
      $error = true;
    }
  }

	$pr = temple_add('login', ['error' => $error, 'message'=> $message]);
	print(temple_add('layout', ['user_name'=> $user_name,'user_avatar'=> $user_avatar,'is_auth'=> $is_auth, 'title' => 'Главная страница', 'cont' => $pr, 'arr' => $arr]));