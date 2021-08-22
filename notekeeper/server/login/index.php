<?php
  // This file contains all the validation and storing of data into the database.
  header("conten-type: application/json");
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  $response = [];
  $status = "success";


  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $status = 'fail';
    $response['data']['email'] = 'Please enter a valid email address!';
  }

  if(strlen($password) < 8){
    $status = 'fail';
    $response['data']['password'] = 'Looks like you chosen too week password!';
  }

  if($status == 'fail'){
    $response['status'] = $status;
    echo json_encode($response);
    exit;
  }

  require_once 'LoginController.php';
  require_once '../model/User.php';

  $user = new User(0, $email, '', $password);
  $ctrl = new LoginController();

  $db_status_array = $ctrl->login($user);

  session_start();
  if($user_id = $ctrl->get_user_id()){
    $user_name = $ctrl->get_user_name();
    $_SESSION['user_id'] = $user_id;
    $_SESSION['user_name'] = $user_name;
  }
  echo json_encode($db_status_array);
 ?>
