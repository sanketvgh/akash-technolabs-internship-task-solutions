<form action='' method='get'>
what do you like?
<input type='checkbox' name='hobbies[]' value='basketball'>basketball
<input type='checkbox' name='hobbies[]' value='golf'>golf
<input type='checkbox' name='hobbies[]' value='running'>running
<input type='checkbox' name='hobbies[]' value='walking'>walking
<input type='checkbox' name='hobbies[]' value='soccer'>soccer
<input type='checkbox' name='hobbies[]' value='volleyball'>volleyball
<input type='checkbox' name='hobbies[]' value='badminton'>badminton
<input type='submit' name='submit' value='done!'>
</form>
<?php 
if(isset($_GET['submit']) && isset($_GET['hobbies'])){
        $hobbies = $_GET['hobbies'];
        echo "<h3>Ok, you like " . implode(', ', $hobbies);
}
?>
