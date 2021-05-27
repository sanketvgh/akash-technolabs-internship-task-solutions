<?php 
/* 	Author: Sanket Vaghela
	Task 4: Take 5 subject marks form user and display all the marks and also show total, percentage, and grade. */

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
			$marks = Array($computerScience, $pythonProgramming, $discreteMathematics,$machineLearning, $cryptography);
			
			//marks validation
			for ($i=0; $i < count($marks); $i++) { 
				if($marks[$i] < 0 || $marks[$i] > 100)
					header("location: index.php");
			}
			$isStudentFail = false;

			function getGrade($marks){
				global $isStudentFail;
				$grade = '';
				if ($marks > 80){
					$grade = "<span style='color:#07870c';>AA</span>";
				}
				else if($marks > 60){
					$grade = "<span style='color:#cf7c00'>BB</span>";
				}
				else if($marks > 50){
					$grade = "<span style='color:#d3bf09'>CC</span>";
				}
				else if($marks >= 25){
					$grade = "<span style='color:#f05449'>DD</span>";
				}
				else{
					$grade = "<span style='color:red'>FF</span>";
					$isStudentFail = true;
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
					<th>Grade</th>
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
					$totalMarks = count($marks) * 100;
					$totalSocredMarks = array_sum($marks); 
					
					$percentage = $totalSocredMarks / $totalMarks * 100;
				?>
			</tbody>
		</table>
		<table class="column">
			<thead>
				<th>Total</th>
				<th>Percentage</th>
				<th>Final Grade</th>
			</thead>
			<tbody>
				<tr>
					<td><?php echo "$totalSocredMarks/$totalMarks"; ?></td>
					<td><?php echo "$percentage%"; ?></td>

					<td><?php echo ($isStudentFail ? "<span style='color:red'>FF</span>" : getGrade($percentage)) ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>