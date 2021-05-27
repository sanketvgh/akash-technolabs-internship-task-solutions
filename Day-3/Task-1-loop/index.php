<?php 
/* Author: Sanket Vaghela
/* Task 1: Demonstrate the Loop in PHP. */
$n = 5;
//for loop
for ($i=0; $i < $n; $i++) { 
	echo "<p>for loop: $i</p>";
}
echo "<hr/>";

//while loop
$i = 0;
while ($i < $n) {
	echo "<p>while loop: $i</p>";
	$i++;
}
echo "<hr/>";

//do while
$i = 0;
do {
	echo "<p>do while loop: $i</p>";
	$i++;
} while ($i < $n);