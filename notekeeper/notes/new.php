<?php
  session_start();
  if(!isset($_SESSION['user_id']))
    header('location: ../login/');
  $hidden_input = '';
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $hidden_input = "<input type='hidden' id='note_id' name='id' value='$id'>";
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Your note</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/simditor.css" />
    <link rel="stylesheet" href="../css/raster2.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <div class="loading-bar loading-bar--show"></div>
            <h1 class="logo"><a href="index.php">NoteKeeper</a></h1>
            <br>
            <div class="container">
    <r-grid columns=2>
      <r-cell span=1>
        <a href="../notes" class='link-back'>Back</a>
      </r-cell>
      <?php
        if(isset($_GET['id'])){
       ?>
      <r-cell style="text-align: right" span=1>
          <a href="#" class='link-delete' id='delete_note'>Delete</a>
        </r-cell>
      <?php } ?>
    </r-grid>
    <br>
    <br>
    <form action="index.html" method="post" id='noteForm'>
      <?php echo $hidden_input; ?>
      <r-grid columns=2 id="note_info">

      </r-grid>
      <label for='title'>Title</label>
      <input type='text' name='title' id='title'>
      <p id='titleMsg' class='form__message' style="margin: 0"></p>
      <br><br>
      <textarea id="newNoteTextArea" name='content'></textarea>
      <p id='contentMsg' class='form__message' ></p>
      <br>
      <input type="submit" name="save" id="saveButton" value="Save" class="button-primary">
      <div id='response_message'></div>
    </form>
  </div>
    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js" defer
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/module.js" defer></script>
    <script type="text/javascript" src="../js/hotkeys.js" defer></script>
    <script type="text/javascript" src="../js/simditor.js"  defer></script>
    <script type="text/javascript" src="../js/main.js" defer></script>
    <script type="text/javascript" src="../js/notes.js" defer></script>
    <script type="text/javascript" src="../js/noteEditor.js" defer></script>
  </body>
</html>
