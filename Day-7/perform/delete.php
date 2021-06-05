<?php
if(!isset($_GET['id'])){
        header("location: ../error.php");
}
$id = (int)$_GET['id'];
$mysqli = new mysqli("localhost", "root", "", "sanketvaghela");
if($mysqli->connect_errno){
        $mysqli->close();
        header("location: ../error.php");

}
$stmt = $mysqli->prepare("delete from tbl_student where st_id=?");
if($stmt->bind_param("i", $id) && $stmt->execute()){
        if($stmt->affected_rows)
                header("location: ../index.php");
}
$stmt->close();
$mysqli->close();
?>
