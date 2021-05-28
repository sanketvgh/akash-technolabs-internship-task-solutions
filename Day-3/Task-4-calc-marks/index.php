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
				<label class="six columns">Subject Name</label>
				<label class="two columns">Marks</label>
			</div>


			<?php for ($i=1; $i <= 5; $i++) { ?>
			<div class="row">
					<input type="text" class="six columns" placeholder="What's your subject <?php echo $i ?> name?" name="subjects[]" required>
					<input type="text" class="two columns" placeholder="Marks" name="marks[]"  required>
			</div>
			<?php } ?>


			<div class="row" style="margin-top: 10px;">
				<input type="submit" class="button button-primary eight columns" name="submit" value="Get result">
			</div>
		</form>
	</div>
</body>
</html>