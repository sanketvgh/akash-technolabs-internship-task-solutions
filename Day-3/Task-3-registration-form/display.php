<?php 
/* 	Author: Sanket Vaghela
	Task 3: Design a registration form.
	About: Display submitted data */

	//if anyone try to access display.php directly then redirect to index page. 
	
	if(!isset($_POST['submit'])){
		header("location: index.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- 
		CSS Framework: SKELETON
	 -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" integrity="sha512-EZLkOqwILORob+p0BXZc+Vm3RgJBOe1Iq/0fiI7r/wJgzOFZMlsqTa29UEl6v6U6gsV4uIpsNZoV32YZqrCRCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Task 2: Input From User</title>
</head>
<body>
	<div class="container">
		<?php 
			$name = $_POST['name'];
			$phoneNo = $_POST['phone-no'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$age = (int)$_POST['age'];
			$gender = $_POST['gender'];
			$address = $_POST['address'];
			$favColor = $_POST['fav_color'];
		?>
		<table class="column" style="padding: 10px 30px;border-radius:6px; box-shadow:0 8px 65px 3px rgba(0, 0, 0, .17); border: 20px solid  <?php echo $favColor; ?>">
			<tbody>
				<tr>
					<td>Name</td>
					<td><?php echo "$name"; ?></td>
				</tr>
				<tr>
					<td>Phone No</td>
					<td><?php echo "$phoneNo"; ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo "$email"; ?></td>
				</tr>
				<tr>
					<td>Age</td>
					<td><?php echo "$age"; ?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php echo "$gender"; ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo "$address"; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>