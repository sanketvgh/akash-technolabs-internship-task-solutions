<?php
  if(!isset($_GET['id']))
    header("location: error.php");
 ?>
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
      <title>Update user</title>
      <meta charset="UTF-8" />
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css"
         integrity="sha512-EZLkOqwILORob+p0BXZc+Vm3RgJBOe1Iq/0fiI7r/wJgzOFZMlsqTa29UEl6v6U6gsV4uIpsNZoV32YZqrCRCQ=="
         crossorigin="anonymous"
         referrerpolicy="no-referrer"
         />
      <link rel="stylesheet" href="css/style.css" />
   </head>
   <body class="container">
     <?php
        $id = (int)$_GET['id'];
       $uda = UserDataAccess::get_object();
       $user = $uda->get_user($id);
     ?>
      <br>
      <h3>User Management System</h3>
      <form style="margin: 20px 0" method="post" action="perform/update.php">
        <input type="hidden" name="id" value="<?php echo $user->get_id(); ?>">
         <div class="row">
            <div class="six columns">
               <label for="firstname">First Name</label>
               <input class="u-full-width" type="text" placeholder="Sanket" id="firstname" name='firstname' value="<?php echo $user->get_firstname(); ?>" required>
            </div>
            <div class="six columns">
               <label for="lastname">Last Name</label>
               <input class="u-full-width" type="text" placeholder="Vaghela" id="lastname" name='lastname' value="<?php echo $user->get_lastname(); ?>" required>
            </div>
         </div>
         <div class="row">
            <div class="six columns">
               <label for="email">Email</label>
               <input class="u-full-width" type="email" placeholder="test@gmail.com" id="email" name='email' value="<?php echo $user->get_email(); ?>" required>
            </div>
            <div class="six columns">
               <label for="phone">Phone no</label>
               <input class="u-full-width" type="number" placeholder="9871234567" id="phone" name='phone'  value="<?php echo $user->get_phone(); ?>" required>
            </div>
         </div>
        <?php $gender = $user->get_gender(); ?>
         <div class="row" style="margin: 10px 0">
            <div class="two columns flex">
               <input type="radio"  id="male" name='gender' value='m' <?php echo $gender == 'm' ? 'checked' : '' ?>>
               <label for="male">Male</label>
            </div>
            <div class="two columns flex">
               <input type="radio"  id="female" name='gender' value='f' <?php echo $gender == 'f' ? 'checked' : '' ?>>
               <label for="female">Female</label>
            </div>
         </div>
         <div class="row">
            <div class="six columns">
               <label for="location">Location</label>
               <input class="u-full-width" type="text" placeholder="Surat" id="location" name='location' value="<?php echo $user->get_location(); ?>" required>
            </div>
            <div class="six columns">
               <label for="role">Role</label>
               <?php $role = $user->get_role(); ?>

               <select class="u-full-width" id="role" name='role'>
                  <option value="employee" <?php echo $role == 'employee' ? 'selected' : '' ?>>Employeee</option>
                  <option value="manager" <?php echo $role == 'manager' ? 'selected' : '' ?>>Manager</option>
                  <option value="admin" <?php echo $role == 'admin' ? 'selected' : '' ?>>Admin</option>
                  <option value="other" <?php echo $role == 'other' ? 'selected' : '' ?>>Other</option>
               </select>
            </div>
         </div>
         <input class="button-primary" type="submit" value="Update" name='submit'>
      </form>
      <a href="index.php">View all user</a>
   </body>
</html>
