<?php
  session_start();
  if(!isset($_SESSION['user_id']))
    header('location: ../login/');
  session_destroy();
  header('location: ../login/');
 ?>
