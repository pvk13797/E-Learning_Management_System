<?php
include('dbcon.php');
$id = $_POST['id'];
mysqli_query($con,"delete from files where file_id = '$id' ")or die(mysqli_error());
?>
