<?php require '../parts/loading.php' ?>
<?php
   $root = $_SERVER['DOCUMENT_ROOT'] . '/akash-technolabs-internship-task-solutions/Day-7';
   echo $root;

   $path = $root . "/model/user.php";
   require_once $path;

   $path = $root . "/controller/UserDataAccess.php";
   require_once $path;
 ?>
<?php
  if(!isset($_POST['submit']))
    header('location:../error.php');

  $firstname = trim($_POST['firstname']);
  $lastname = trim($_POST['lastname']);
  $email = trim($_POST['email']);
  $phone = trim($_POST['phone']);
  $gender = trim($_POST['gender']);
  $location = trim($_POST['location']);
  $role = trim($_POST['role']);

   $user = new User(0, $firstname, $lastname, $email, $phone, $gender, $location, $role);

   $uda = UserDataAccess::get_object();
   $isDone = $uda->insert($user);

   if($isDone){
     header('location:../index.php?performed=0');
   }else{
     header('location:../error.php');
   }

 ?>
