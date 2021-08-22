<?php
  // This file contains all the validation and storing of data into the database.
  header("conten-type: application/json");

  session_start();
  if(!isset($_SESSION['user_id'])){
    $response['status'] = 'error';
    $response['message'] = 'Login is required';
    echo json_encode($response);
    exit;
  }

  require_once 'NoteController.php';
  require_once '../model/Note.php';
  $ctrl = new NoteController();
  $note = new Note();


  function validate($title, $content){
    $response = [];
    $status = "success";

    if(strlen($title) < 1){
      $status = 'fail';
      $response['data']['title'] = 'A title is required to be save your sweet note!';
    }

    if(strlen($title) > 100){
      $status = 'fail';
      $response['data']['title'] = 'The title is too big!';
    }

    if(strlen($content) < 1){
      $status = 'fail';
      $response['data']['content'] = 'Please write a note before saving';
    }
    $response['status'] = $status;
    return $response;
  }

  if(isset($_POST['id']) && isset($_POST['update']) && $_POST['update'] == 'true'){
      $update_id = trim($_POST['id']);
      $title = trim($_POST['title']);
      $content = trim($_POST['content']);
      $response = validate($title, $content);

      if($response['status'] == 'fail'){
        echo json_encode($response);
        exit;
      }
      $note->set_user_id($_SESSION['user_id']);
      $note->set_id($update_id);
      $note->set_title($title);
      $note->set_content($content);
      $db_status_response = $ctrl->update($note);
      echo json_encode($db_status_response);
      exit;

  }else if(isset($_POST['id'])){
    $note->set_user_id($_SESSION['user_id']);
    $note_id = $_POST['id'];
    $note->set_id($note_id);
    $db_status_response = $ctrl->get_note($note);
    echo json_encode($db_status_response);
    exit;
  }
  else{
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    $response = validate($title, $content);
    if($response['status'] == 'fail'){
      echo json_encode($response);
      exit;
    }
    $note->set_user_id($_SESSION['user_id']);
    $note->set_title($title);
    $note->set_content($content);
    $db_status_response = $ctrl->insert($note);
    echo json_encode($db_status_response);
  }

 ?>
