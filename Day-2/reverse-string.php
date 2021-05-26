<?php 
	$string = "sanketvaghela";
	$rev_string = "";
	for ($i=0; $i < strlen($string); $i++) { 
		$rev_string = $string[$i] . $rev_string;
	}
	echo "<h1>Original String: $string<br/>Reverse String: $rev_string";
 ?>