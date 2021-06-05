<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Student Registration</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <style>table *{font-size: .95em}</style>
   <body>
      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>
              <th scope="col">Password</th>
              <th scope="col">DOB</th>
              <th scope="col">Gender</th>
              <th scope="col">Area</th>
              <th scope="col">Pincode</th>
              <th scope="col">Address</th>
              <th scope="col">Blood Group</th>
            </tr>
          </thead>
          <tbody>
        <?php

            $mysqli = new mysqli("localhost", "root", "", "sanketvaghela");
            if($mysqli->connect_errno){
                    $mysqli->close();
                    header("error.php");
            }

            $stmt = $mysqli->prepare("select * from tbl_student");
            if($stmt->execute() && $stmt->bind_result($_id, $_name, $_gender, $_dob,$_email, $_mobile, $_password, $_area, $_pincode, $_blood_group, $_address)){
                    while($stmt->fetch()){
        ?>
            <tr>
            <th scope="row"><?php echo $_id ?></th>
            <td><?php echo $_name ?></td>
            <td><?php echo $_email ?></td>
            <td><?php echo $_mobile ?></td>
            <td><?php echo $_password ?></td>
            <td><?php echo $_dob ?></td>
            <td><?php echo $_gender ?></td>
            <td><?php echo $_area ?></td>
            <td><?php echo $_pincode ?></td>
            <td><?php echo $_address ?></td>
            <td><?php echo $_blood_group ?></td>
            </tr>

        <?php
                    } // end of while
            } // end of main if

        ?>
        </tbody>
        </table>
        </div>
</body>
</html>   
