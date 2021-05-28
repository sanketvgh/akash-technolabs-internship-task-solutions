<?php 
/* 	Author: Sanket Vaghela
	Task 4: Take 5 subject marks form user and display all the marks and also show total, percentage, and grade. */

	//if anyone try to access display.php directly then redirect to index page. 
	$ishasSubjectAndMarks = isset($_GET['submit']) && isset($_GET['subjects']) && isset($_GET['marks']);
	if(!$ishasSubjectAndMarks){
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

			$name = $_GET['name'];
			$subjects = $_GET['subjects'];
			$marks = $_GET['marks'];
			$totalMarks = count($subjects) * 100;
			$totalSocredMarks = 0; 
		
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
			<?php 

				for ($i=0; $i < count($subjects); $i++) {
					$currentMarks = (double)$marks[$i]; 
					echo "<tr>";
					echo "<td>$subjects[$i]</td>";

					$totalSocredMarks += $currentMarks;
					echo "<td>$currentMarks</td>";

					echo "<td>".getGrade($currentMarks)."</td>";
					echo "</tr>";
				}

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