<h1>
<?php 
	$year = 2021;
	if ($year % 400 == 0)
		echo("It is a leap year");
	if ($year % 4 == 0)
		echo("It is a leap year");
	else if ($year % 100 == 0)
		echo("It is not a leap year");
	else
		echo("It is not a leap year");
?>
</h1>