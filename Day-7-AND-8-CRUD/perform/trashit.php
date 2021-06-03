<?php require '../parts/loading.php' ?>
<?php
   $root = $_SERVER['DOCUMENT_ROOT'] . '/akash-technolabs-internship-task-solutions/Day-7';

   $path = $root . "/controller/UserDataAccess.php";
   require_once $path;
 ?>
<?php
  if(isset($_GET['do']) && isset($_GET['id'])){
    $id = $_GET['id'];
    $_do = $_GET['do'];
    echo "$id, $_do";
    $uda = UserDataAccess::get_object();
    $isDone = 0;
    $op_code = 0;
    switch ($_do) {
       case 'move':
         $id = $_GET['id'];
         $isDone = $uda->trashit($id, 1);
         $op_code = 1;
         break;

       case 'restore':
         $id = $_GET['id'];
         $isDone = $uda->trashit($id, 0);
         $op_code = 2;
         break;

       default:
         header('location:../error.php');
         break;
     }
     if($isDone){
        header("location:../index.php?performed=$op_code");
      }
      else{
        header('location:../error.php');
      }
  }
 ?>
