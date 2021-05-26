<?php 
	$n = 123;
	$string = "" . $n;
	$rev_string = "";
	for ($i=0; $i < strlen($string); $i++) { 
		$rev_string = $string[$i] . $rev_string;
	}
	$rev_number = (int)$rev_string;
	echo "<h1>Original Number: $n<br/>Reverse Number: $rev_number";
 ?>