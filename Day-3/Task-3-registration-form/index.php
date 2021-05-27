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
	<style>
		label.required::after{
			content: '*';
			color: red;
			font-size: 1em;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<h2 class="column">Registration Form</h2>
		</div>
		<br>
		<form action="display.php" method="post">
			<div class="row">
				<label for="name" class="two columns required">Name:</label>
				<input type="text" id="name" class="five columns" placeholder="What's your name?" name="name" maxlength="20" required>
			</div>

			<div class="row">
				<label for="phoneNo" class="two columns required">Phone No:</label>
				<input type="number" id="phoneNo" class="five columns" placeholder="What's your Phone number?" name="phone-no" maxLength=10 minLength=10 required>
			</div>

			<div class="row">
				<label for="email" class="two columns required">Email:</label>
				<input type="email" id="email" class="five columns" placeholder="What's your email?" name="email" required>
			</div>

			<div class="row">
				<label for="password" class="two columns required">Password:</label>
				<input type="password" id="password" class="five columns" placeholder="Type a secure password.." name="password" required>
			</div>

			<div class="row">
				<label for="age" class="two columns required">Age:</label>
				<input type="number" id="age" class="five columns" placeholder="What's your age?" name="age" min=1 max=100 required>
			</div>

			<div class="row">
				<label for="gender" class="two columns required">Gender:</label>
				<div class="three columns" style="display: flex; justify-content: space-between; align-items: baseline;">
					<input type="radio" id="male" value='Male' name="gender">
					<label for="male">Male</label>
					<input type="radio" id="female" name="gender">
					<label for="female" value='Female' >Female</label>
				</div>
			</div>

			<div class="row" style="margin-top: 8px;">
				<label for="address" class="two columns required">Address: </label>
			<textarea id="age" class="five columns" placeholder="What's your address?" name="address" required></textarea>
			</div>

			<div class="row">
				<label for="fav_color" class="three columns">Favourite Color: </label>
			<input type="color" id="fav_color" class="four columns" name='fav_color'>
			</div>

			<div class="row" style="margin-top: 10px;">
				<input type="submit" class="button button-primary seven columns" name="submit" value="Submit">
			</div>
		</form>
	</div>
</body>
</html>