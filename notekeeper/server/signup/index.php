<?php
  // This file contains all the validation and storing of data into the database.
  header("conten-type: application/json");
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  $response = [];
  $status = "success";

  if(strlen($name) < 1){
    $status = 'fail';
    $response['data']['name'] = 'Name field can\'t be empty!';
  }

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

  $password_hash = password_hash($password, PASSWORD_DEFAULT);

  require_once 'SignupController.php';
  require_once '../model/User.php';

  $user = new User(0, $email, $name, $password_hash);
  $ctrl = new SignupController();
  $db_status_array = $ctrl->signup($user);

  session_start();
  if($db_status_array['status'] == 'success'){
    if($user_id = $ctrl->get_user_id()){
      $_SESSION['user_id'] = $user_id;
      $_SESSION['user_name'] = $name;
    }
  }
  echo json_encode($db_status_array);
 ?>
