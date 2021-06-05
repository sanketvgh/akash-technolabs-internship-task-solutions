<?php require '../parts/loading.php' ?>
<?php
   $root = $_SERVER['DOCUMENT_ROOT'] . '/akash-technolabs-internship-task-solutions/Day-8';
   $path = $root . "/model/user.php";
   require_once $path;

   $path = $root . "/controller/UserDataAccess.php";
   require_once $path;
 ?>
<?php
  if(isset($_GET['id'])){
    $id = $_GET['id'];

     $uda = UserDataAccess::get_object();
     $isDone = $uda->delete($id);
     if($isDone){
       echo "string";
       header('location:../index.php?performed=3');
     }else{
       header('location:../error.php');
     }
  }else{
    header('location:../error.php');
  }
 ?>
