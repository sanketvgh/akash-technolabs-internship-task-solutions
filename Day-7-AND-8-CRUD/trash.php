<?php
   $root = $_SERVER['DOCUMENT_ROOT'] . '/akash-technolabs-internship-task-solutions/Day-7';

   $path = $root . "/controller/UserDataAccess.php";
   require_once $path;

   $path = $root . "/model/user.php";
   require_once $path;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>User Management System: Trash</title>
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

  <body class="container">
    <?php
      $uda = UserDataAccess::get_object();
      $users = $uda->get_users(1);
    ?>
    <?php require 'parts/home/trash_list.php' ?>

    <script src="js/main.js" charset="utf-8"></script>
  </body>
</html>
