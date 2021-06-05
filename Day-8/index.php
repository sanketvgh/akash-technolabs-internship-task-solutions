<?php
   $root = $_SERVER['DOCUMENT_ROOT'] . '/akash-technolabs-internship-task-solutions/Day-8';

   $path = $root . "/controller/UserDataAccess.php";
   require_once $path;

   $path = $root . "/model/user.php";
   require_once $path;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>User Management System: Home</title>
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css"
      integrity="sha512-EZLkOqwILORob+p0BXZc+Vm3RgJBOe1Iq/0fiI7r/wJgzOFZMlsqTa29UEl6v6U6gsV4uIpsNZoV32YZqrCRCQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css" />
  </head>



  <body>
    <?php require 'parts/alert.php' ?>
    <div class="container">
      <?php
        $uda = UserDataAccess::get_object();
        $users = $uda->get_users(0);
      ?>

      <?php if(count($users) == 0) { ?>
        <?php require 'parts/welcome.php'; ?>
      <?php }else{ //end of if ?>
        <?php require 'parts/home/header.php'; ?>
        <?php require 'parts/home/table.php'; ?>
      <?php } //end of else ?>
    </div>
    <script src="js/main.js" charset="utf-8"></script>
  </body>
</html>
