<?php
        if(!isset($_POST['submit'])){
                header("location: ../error.php");
        }
        $id = (int)$_POST['id'];
        $mysqli = new mysqli("localhost", "root", "", "sanketvaghela");
        if($mysqli->connect_errno){
                $mysqli->close();
                header("location: ../error.php");

        }
        $name = trim($_POST['name']);
          $email = trim($_POST['email']);
          $mobile = trim($_POST['mobile']);
          $password = trim($_POST['password']);
          $dob = trim($_POST['dob']);
          $gender = trim($_POST['gender']);
          $area = trim($_POST['area']);
          $address = trim($_POST['address']);
          $pincode = trim($_POST['pincode']);
          $blood_group = trim($_POST['bloodgroup']);


          $stmt = $mysqli->prepare("update tbl_student set st_name=?, st_gender=?, st_dob=?, st_email=?, st_mobile=?, st_password=?, st_area=?, st_pincode=?, st_blood_group=?, st_address=? where st_id=?");

          if($stmt->bind_param('ssssssssssi', $name, $gender, $dob, $email, $mobile, $password, $area, $pincode, $blood_group, $address, $id) && $stmt->execute()){
                  if($stmt->affected_rows){
                          $stmt->close();
                          $mysqli->close();
                          header("location: ../index.php");
                  }else {
                    $stmt->close();
                    $mysqli->close();
                  }

          }else{
            $stmt->close();
            $mysqli->close();
          }
?>
