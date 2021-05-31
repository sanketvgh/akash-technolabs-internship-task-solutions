<form action='' method='get'>
    <?php for($i = 1; $i <= 5; $i++) { ?>
    <input type='number' name='nums[]' placeholder='type <?php echo $i ?> number'><br>
<?php } ?>
    <input type='submit' name='submit' >
</form>
   <?php 
if(isset($_GET['submit']) && isset($_GET['nums'])){
        $nums = $_GET['nums'];
        for($i = 0; $i < count($nums); $i++){
                $nums[$i] = (int)$nums[$i];
        }
        echo "Original array: " . implode(', ', $nums);
        shuffle($nums);
        echo "<br>Suffled array: " . implode(', ', $nums);
}
?>

