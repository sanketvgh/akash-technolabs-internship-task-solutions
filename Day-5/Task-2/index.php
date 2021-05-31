<?php 
    // two ways to create array
    $a = Array(13, 53, 53, 64, 35, 66, 23);
    echo "Original array: ";
    print_r($a);
    echo "<br>";
    echo "<br>";

    echo "Total number of items in array is " . count($a);
    echo "<br>";
    echo "<br>";

    echo "Sum of array is " . array_sum($a);
    echo "<br>";
    echo "<br>";

    array_reverse($a);
    echo "Reverse of arrray ";
    print_r($a);
    echo "<br>";
    echo "<br>";

    sort($a);
    echo "Sorted array:";
    print_r($a);
    echo "<br>";
    echo "<br>";

    shuffle($a);
    echo "Shuffled array:";
    print_r($a);
    echo "<br>";
    echo "<br>";

    echo "has 35 in it?(0/1): " . in_array(35, $a);
    echo "<br>";
    echo "<br>";

    echo "Removed duplicate in array: "; 
    print_r(array_unique($a));
    echo "<br>";
    echo "<br>";

    echo "String to array using explode function "; 
    print_r(explode(' ', 'Sanket Vaghela'));
    echo "<br>";
    echo "<br>";

    echo "Array to String using implode function "; 
    print_r(implode(', ', $a));
    echo "<br>";
    echo "<br>";

    echo "String to array using explode function "; 
    print_r(explode(' ', 'Sanket Vaghela'));
    echo "<br>";
    echo "<br>";

?>
