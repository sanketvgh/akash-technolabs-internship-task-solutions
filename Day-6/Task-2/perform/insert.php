<?php
  $connection = mysqli_connect('localhost', 'root', '');

  $isConnectionMade = $connection && mysqli_select_db($connection, 'sanketvaghela');
  if(!$isConnectionMade){
      header('location: ../error.php');
  }

  if (!isset($_POST['submit'])) {
    mysqli_close($connection);
    header('location: ../error.php');
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

  $query = "insert into tbl_student(st_name,	st_gender,	st_dob,	st_email,	st_mobile,	st_password,	st_area,	st_pincode,	st_blood_group,	st_address) values('$name', '$gender', '$dob', '$email', '$mobile', '$password', '$area', '$pincode', '$blood_group', '$address')";

  if(mysqli_query($connection, $query)){
    mysqli_close($connection);
?>
<script type="text/javascript">
  alert('Successfully inserted record!!');
  window.location = '../';
</script>
<?php
} // query if block end
  else{
    mysqli_close($connection);
    header('location: ../error.php');
  }
?>
