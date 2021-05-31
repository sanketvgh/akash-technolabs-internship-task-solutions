<?php 
    // two ways to create array
    $a = Array(1, 2, 3, 4, "Five");
    $b = ["One", "Two", "Three", "Four", "Five"];
    // Dynamic way to add array items
    $c = [];
    $c[] = "Sanket";
    $c[] = "Vaghela";
    $c[] = 20;

    //accessing array items
    echo "hey, my self $c[0] $c[1] and i'm $c[2] years old.<br/>";
    echo "<pre>";
    print_r($a); 
    echo "</pre>";
    echo "<pre>";
    print_r($b); 
    echo "</pre>";

    //associative array
    $user = [
            'name' => 'Sanket Vaghela',
            'age' => 20,
            'isOnline' => true,
            'status' => 'My status.'
    ];
    echo "<h1>Your name is " . $user['name'] . " and you are " . $user['age'] . " years old.</h1>";
    echo $user['isOnline'] ? "<p style='color:green'>Online</p>" : "<p style='color:gray'>Offline</p>";
    echo "<p style='color:red'>Your Status:" . $user['status'];
    echo "<pre>";
    print_r($user); 
    echo "</pre>";
    
    //Concept of foreach

    foreach($user as $key => $value){
            echo "key: $key, <br>value: $value, <br>user[$key] = $value<br><br>";
    }
?>
