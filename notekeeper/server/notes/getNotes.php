<?php
header("conten-type: application/json");

  session_start();
  if(!isset($_SESSION['user_id'])){
    $response['status'] = 'error';
    $response['message'] = 'Login is required';
    echo json_encode($response);
    exit;
  }

  require_once 'NoteController.php';
  $ctrl = new NoteController();
  $response = $ctrl->get_notes($_SESSION['user_id']);
  echo json_encode($response);
