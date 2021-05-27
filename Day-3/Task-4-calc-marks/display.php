<?php 
/* 	Author: Sanket Vaghela
	Task 4: Take 5 subject marks form user and display all the marks with total, percentage, and grade. */

	//if anyone try to access display.php directly then redirect to index page. 
	
	if(!isset($_GET['submit'])){
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
	<title>Task 2: Your result</title>
	<style>table span{font-weight: bold}</style>
</head>
<body>
	<div class="container">
		<?php 
			$name = $_GET['name'];
			$computerScience = (double)$_GET['computer-science'];
			$pythonProgramming = (double)$_GET['python-programming'];
			$discreteMathematics = (double)$_GET['discrete-mathematics'];
			$machineLearning = (double)$_GET['machine-learning'];
			$cryptography = (double)$_GET['cryptography'];
			$subjects = Array($computerScience, $pythonProgramming, $discreteMathematics,$machineLearning, $cryptography);
			
			//marks validation
			for ($i=0; $i < count($subjects); $i++) { 
				if($subjects[$i] < 0 || $subjects[$i] > 100)
					header("location: index.php");
			}
			$isFail = false;

			function getGrade($marks){
				global $isFail;
				$grade = '';
				if ($marks > 80){
					$grade = "<span style='color:green';>First</span>";
				}
				else if($marks > 60){
					$grade = "<span style='color:orange'>Second</span>";
				}
				else if($marks > 50){
					$grade = "<span style='color:orange'>Third</span>";
				}
				else if($marks >= 25){
					$grade = "<span style='color:red'>Fouth</span>";
				}
				else{
					$grade = "<span style='color:red'>Fail</span>";
					$isFail = true;
				}
				return $grade;
			}

		?>
		<h3>Result</h3>
		<h4>Name: <?php echo "$name"; ?></h4>
		<table class="column">
			<thead>
				<tr>
					<th>Subject</th>
					<th>Marks</th>
					<th>Position</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Computer Science:</td>
					<td><?php echo "$computerScience"; ?></td>
					<td><?php echo getGrade($computerScience); ?></td>
				</tr>
				<tr>
					<td>Python Programming:</td>
					<td><?php echo "$pythonProgramming"; ?></td>
					<td><?php echo getGrade($pythonProgramming); ?></td>
				</tr>
				<tr>
					<td>Discrete Mathematics:</td>
					<td><?php echo "$discreteMathematics"; ?></td>
					<td><?php echo getGrade($discreteMathematics); ?></td>
				</tr>
				<tr>
					<td>Machine Learning:</td>
					<td><?php echo "$machineLearning"; ?></td>
					<td><?php echo getGrade($machineLearning); ?></td>
				</tr>
				<tr>
					<td>Cryptography:</td>
					<td><?php echo "$cryptography"; ?></td>
					<td><?php echo getGrade($cryptography); ?></td>
				</tr>
				<?php 
					$total = array_sum($subjects); 
					$percentage = $total / 500 * 100;
				?>
			</tbody>
		</table>
		<table class="column">
			<thead>
				<th>Total</th>
				<th>Percentage</th>
				<th>Final Position</th>
			</thead>
			<tbody>
				<tr>
					<td><?php echo "$total/500"; ?></td>
					<td><?php echo "$percentage%"; ?></td>

					<td><?php echo ($isFail ? getGrade(0) : getGrade($percentage)) ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>