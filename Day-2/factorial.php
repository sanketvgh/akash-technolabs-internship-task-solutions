<?php 
	$n = 5;
	$factorial = 1;
	for ($i=1; $i <= $n; $i++) { 
		$factorial *= $i;
	}
	echo "<h1>The factorial of $n is $factorial";
 ?>