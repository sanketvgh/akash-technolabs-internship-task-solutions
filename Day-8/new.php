<!DOCTYPE html>
<html>
   <head>
      <title>Add new user</title>
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
      <br>
      <h3>User Management System</h3>
      <form style="margin: 20px 0" method="post" action="perform/insert.php">
         <div class="row">
            <div class="six columns">
               <label for="firstname">First Name</label>
               <input class="u-full-width" type="text" placeholder="Sanket" id="firstname" name='firstname' required>
            </div>
            <div class="six columns">
               <label for="lastname">Last Name</label>
               <input class="u-full-width" type="text" placeholder="Vaghela" id="lastname" name='lastname' required>
            </div>
         </div>
         <div class="row">
            <div class="six columns">
               <label for="email">Email</label>
               <input class="u-full-width" type="email" placeholder="test@gmail.com" id="email" name='email' required>
            </div>
            <div class="six columns">
               <label for="phone">Phone no</label>
               <input class="u-full-width" type="number" placeholder="9871234567" id="phone" name='phone' required>
            </div>
         </div>
         <div class="row" style="margin: 10px 0">
            <div class="two columns flex">
               <input type="radio"  id="male" name='gender' value='m'>
               <label for="male">Male</label>
            </div>
            <div class="two columns flex">
               <input type="radio"  id="female" name='gender' value='f'>
               <label for="female">Female</label>
            </div>
         </div>
         <div class="row">
            <div class="six columns">
               <label for="location">Location</label>
               <input class="u-full-width" type="text" placeholder="Surat" id="location" name='location' required>
            </div>
            <div class="six columns">
               <label for="role">Role</label>
               <select class="u-full-width" id="role" name='role'>
                  <option value="employee">Employeee</option>
                  <option value="manager">Manager</option>
                  <option value="admin">Admin</option>
                  <option value="other">Other</option>
               </select>
            </div>
         </div>
         <input class="button-primary" type="submit" value="Add">
      </form>
      <a href="index.php">View all user</a>
   </body>
</html>
