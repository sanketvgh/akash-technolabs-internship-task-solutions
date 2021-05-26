<?php 
	$day = 7;
	switch ($day) {
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			echo "Weekday";
			break;
		case 6:
		case 7:
			echo "Weekend<br>";
			break;
		default:
			echo "Day should be (1-7)!<br>";
	}
 ?>