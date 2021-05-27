<!DOCTYPE html>
<html lang="en">
<head>
	<!-- 
		Author: Sanket Vaghela
	 	Task 4: Take 5 subject marks form user and display all the marks and also show total, percentage, and grade.

	 	CSS Framework: SKELETON
	 -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" integrity="sha512-EZLkOqwILORob+p0BXZc+Vm3RgJBOe1Iq/0fiI7r/wJgzOFZMlsqTa29UEl6v6U6gsV4uIpsNZoV32YZqrCRCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Task 4: Calc Marks</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h2 class="column">Calculate Marks</h2>
		</div>
		<br>
		<form action="display.php" method="get">
			<div class="row">
				<label for="name" class="two columns">Name: </label>
			<input type="text" id="name" class="six columns" placeholder="What's your name?" name="name" maxlength="20" required>
			</div>

			<div class="row">
				<label for="computerScience" class="two columns">Computer Science: </label>
			<input type="text" id="computerScience" class="six columns" placeholder="What's your Computer Science marks?" name="computer-science"  required>
			</div>

			<div class="row">
				<label for="pythonProgramming" class="two columns">Python Programming: </label>
			<input type="text" id="pythonProgramming" class="six columns" placeholder="What's your Python Programming marks?" name="python-programming"  required>
			</div>

			<div class="row">
				<label for="discreteMathematics" class="two columns">Discrete Mathematics: </label>
			<input type="text" id="discreteMathematics" class="six columns" placeholder="What's your Discrete Mathematics marks?" name="discrete-mathematics"  required>
			</div>

			<div class="row">
				<label for="machineLearning" class="two columns">Machine Learning: </label>
			<input type="text" id="machineLearning" class="six columns" placeholder="What's your Machine Learning marks?" name="machine-learning" required>
			</div>

			<div class="row">
				<label for="cryptography" class="two columns">Cryptography: </label>
			<input type="text" id="cryptography" class="six columns" placeholder="What's your Cryptography marks?" name="cryptography"  required>
			</div>

			<div class="row" style="margin-top: 10px;">
				<input type="submit" class="button button-primary eight columns" name="submit" value="Get result">
			</div>
		</form>
	</div>
</body>
</html>