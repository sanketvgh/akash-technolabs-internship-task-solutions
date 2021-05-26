<?php 
	$n = 123;
	$sum = 0;
	for ($i=$n; $i > 0; $i = floor($i / 10)) { 
		$sum += $i % 10;
	}
	echo "<h1>Sum of digits of number $n is $sum";
 ?>