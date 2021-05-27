<!DOCTYPE html>
<html lang="en">
<head>
	<!-- 
		Author: Sanket Vaghela
	 	Task 3: Design a registration form. 

	 	CSS Framework: SKELETON
	 -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" integrity="sha512-EZLkOqwILORob+p0BXZc+Vm3RgJBOe1Iq/0fiI7r/wJgzOFZMlsqTa29UEl6v6U6gsV4uIpsNZoV32YZqrCRCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Task 3: Design a registration form.</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h2 class="column">Registration Form</h2>
		</div>
		<br>
		<form action="display.php" method="post">
			<div class="row">
				<label for="name" class="two columns">Name: </label>
			<input type="text" id="name" class="five columns" placeholder="What's your name?" name="name" maxlength="20" required>
			</div>

			<div class="row">
				<label for="age" class="two columns">Age: </label>
			<input type="number" id="age" class="five columns" placeholder="What's your age?" name="age" min=1 max=100 required>
			</div>

			<div class="row">
				<input type="radio" id="male" class="one columns"  value='Male' name="gender">
				<label for="male" class="one columns">Male</label>
				<input type="radio" id="female" class="one columns" name="gender">
				<label for="female" class="one columns" value='Female' >Female</label>
			</div>

			<div class="row" style="margin-top: 8px;">
				<label for="address" class="two columns">Address: </label>
			<textarea id="age" class="five columns" placeholder="What's your address?" name="address" required></textarea>
			</div>

			<div class="row">
				<label for="fav_color" class="two columns">Favourite Color: </label>
			<input type="color" id="fav_color" class="five columns" name='fav_color' required>
			</div>

			<div class="row" style="margin-top: 10px;">
				<input type="submit" class="button button-primary seven columns" name="submit" value="Submit">
			</div>
		</form>
	</div>
</body>
</html>