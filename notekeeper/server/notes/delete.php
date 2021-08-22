<?php
header("conten-type: application/json");

  session_start();
  if(!isset($_SESSION['user_id'])){
    $response['status'] = 'error';
    $response['message'] = 'Login is required';
    echo json_encode($response);
    exit;
  }

  if(!isset($_GET['id'])){
    $response['status'] = 'fail';
    $response['data']['message'] = 'id is required';
    echo json_encode($response);
    exit;
  }

  require_once 'NoteController.php';
  $ctrl = new NoteController();
  $id = $_GET['id'];
  $response = $ctrl->deleteNote($id, $_SESSION['user_id']);
  echo json_encode($response);
