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
			$i = 1;
			$totalMarks = 0;
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
				foreach ($_GET as $key => $value) {
					if ($key == 'submit' || $key == 'name') {
						continue;
					}
					if($i % 2 == 1){ 
						$totalMarks += 100;
						echo "<tr><td>$value</td>";
					}else{
						$marks = (double)$value;
						$totalSocredMarks += $marks;
						echo "<td>$marks</td>";
						echo "<td>".getGrade($marks)."</td></tr>";
					}
					$i++; 
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