<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Student Registration</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <div class="container">
         <h1>Student Registration</h1>
         <br>
         <form action="perform/insert.php" method="post">
            <div class="form-group row">
               <label for="name" class="col-sm-2 col-form-label">Name</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" placeholder="Name" name="name">
               </div>
            </div>
            <div class="form-group row">
               <label for="email" class="col-sm-2 col-form-label">Email</label>
               <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" placeholder="Email" name="email">
               </div>
            </div>
            <div class="form-group row">
               <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
               <div class="col-sm-10">
                  <input type="number" class="form-control" id="mobile" placeholder="Mobile" name="mobile">
               </div>
            </div>
            <div class="form-group row">
               <label for="password" class="col-sm-2 col-form-label">Password</label>
               <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" placeholder="Password" name="password">
               </div>
            </div>
            <div class="form-group row">
               <label for="dob" class="col-sm-2 col-form-label">Dob</label>
               <div class="col-sm-10">
                  <input type="date" class="form-control" id="dob" placeholder="Dob" name="dob">
               </div>
            </div>
            <fieldset class="form-group">
            <div class="row">
               <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
               <div class="col-sm-10">
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                     <label class="form-check-label" for="male">
                     Male
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                     <label class="form-check-label" for="female">
                     Female
                     </label>
                  </div>
               </div>
            </div>
            <br>
            <div class="form-group row">
               <label for="pincode" class="col-sm-2 col-form-label">Pincode</label>
               <div class="col-sm-10">
                  <input type="number" class="form-control" id="pincode" placeholder="Pincode" name="pincode">
               </div>
            </div>
            <div class="form-group row">
               <label for="bloodgroup" class="col-sm-2 col-form-label">Bloodgroup</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="bloodgroup" placeholder="Bloodgroup" name="bloodgroup">
               </div>
            </div>
            <div class="form-group row">
               <label for="area" class="col-sm-2 col-form-label">Area</label>
               <select name='area' class="col-sm-10 form-control custom-select custom-select-sm">
                  <option value="surat">Surat</option>
               </select>
            </div>
            <div class="form-group row">
               <label for="address" class="col-sm-2 col-form-label">Address</label>
               <textarea class="col-sm-10 form-control" id='address' name="address" ></textarea>
            </div>
            <div class="form-group row">
               <div class="col-sm-10">
                  <input type="submit" name='submit' value='Submit' class="btn btn-primary">
               </div>
            </div>
         </form>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
</html>
