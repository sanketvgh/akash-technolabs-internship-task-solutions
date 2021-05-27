<?php 
/* 	Author: Sanket Vaghela
	Task 2: Demonstrate the concept of taking input from user and display it on another page.
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
			$age = (int)$_POST['age'];
		?>
		<div class="row">
			<h2 class="six"><?php echo "Your Name is $name"; ?></h2>
			<h2 class="six"><?php echo "Your age is $age"; ?></h2>
		</div>
	</div>
</body>
</html>