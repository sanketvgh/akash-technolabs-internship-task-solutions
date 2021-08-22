<?php
  session_start();
  if(!isset($_SESSION['user_id']))
    header('location: ../login/');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Your notes</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/simditor.css" />
    <link rel="stylesheet" href="../css/raster2.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <div class="loading-bar loading-bar--show"></div>

    <div class="container">
      <h1 class="logo"><a href="">NoteKeeper</a></h1>
      <br>
      <r-grid columns=2>
        <r-cell span=1>
          <h3 style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap">Welcome <?php echo $_SESSION['user_name']; ?></h3>
        </r-cell>
        <r-cell style="text-align: right; padding-top: 10px" span=1>
          <a href="../logout" >Logout</a>
      </r-grid>
      <br>

      <div id='if_no_note'></div>
    <!-- all notes -->

    <r-grid columns=2 columns-s=1 columns-l=4 id='allnotes'>

    </r-grid>

      <div class="new_note">
        <a href="new.php" class="button button-primary">Add new Note</a>
      </div>
    </div>

  <script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js" defer
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/main.js" defer></script>
    <script type="text/javascript" src="../js/getNotes.js" defer></script>
  </body>
</html>
