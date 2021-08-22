<?php
  session_start();
  if(isset($_SESSION['user_id']))
    header('location: ../notes/');
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>NoteKeeper - Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/raster2.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body style="padding-top:0; padding-bottom:0; height: 100vh">
<div class='loading-bar loading-bar--show'></div>
    <div class="d--f fd--c" style="height: 100%">
        <div class="d--f jc--c ai--c" style="flex-grow: 2;">
            <h1 class="logo"><a href="/">NoteKeeper</a></h1>
        </div>
        <div class="d--f jc--c" style="flex-grow: 3">
                <div class="main">
               <form action='' class='form' id='loginForm'>
                <r-grid columns=2 class='form'>
                    <r-cell span=row>
                        <h2 style='text-align: center; margin-bottom: 32px'>Login</h2>
                    </r-cell>
                    <r-cell span=row>
                        <label for="email" class="form__lable">Email</label>
                        <input type="text" class='form__input' id='email' name='email' placeholder="Enter your email">
                        <p id='emailMsg' class="form__message"></p>
                    </r-cell>
                    <r-cell span=row>
                        <label for="password" class="form__lable">Password</label>
                        <input type="password" class='form__input' id='password' name='password' placeholder="Enter a strong password">
                        <p id='passwordMsg' class="form__message"></p>
                    </r-cell>
                    <r-cell span=row>
                        <input type="submit" class='form__input button-primary' name='submit' value='Login'>
                    </r-cell>
                      </r-grid>
                    </form>
                        <p>Don't have an account? <a href="../signup/" class="link">Signup</a></p>
</div>
        </div>
    </div>
<script src="../js/raster2.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>
    <script src="../js/main.js" charset="utf-8"></script>
    <script src="../js/login.js" charset="utf-8"></script>
</body>

</html>
