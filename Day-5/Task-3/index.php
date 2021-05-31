<form action='' method='get'>
    is username available?<input type='text' name='username' placeholder='type a username...' required>
    <input type='submit' name='submit' value='check'>
<?php 
if(isset($_GET['submit'])){
        $usernames = ['sanketvaghela' => 'Sanket Vaghela'];
        $username = $_GET['username'];
        echo "<p ";
        if(array_key_exists($username, $usernames))
                echo "style='color: green' >Yes, $username is available and your name is " . $usernames[$username];
        else 
                echo "style='color: red' >Sorry $username is not available";
        echo "</p>";
}
?>
