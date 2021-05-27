<!DOCTYPE html>
<html lang="en">
<head>
	<!-- 
		Author: Sanket Vaghela
	 	Task 2: Demonstrate the concept of taking input from user and display it on another page. 

	 	CSS Framework: SKELETON
	 -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" integrity="sha512-EZLkOqwILORob+p0BXZc+Vm3RgJBOe1Iq/0fiI7r/wJgzOFZMlsqTa29UEl6v6U6gsV4uIpsNZoV32YZqrCRCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Task 2: Input From User</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h2 class="column">Task 2: Working With Form</h2>
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
				<input type="submit" class="button button-primary seven columns" name="submit" value="Submit">
			</div>
		</form>
	</div>
</body>
</html>