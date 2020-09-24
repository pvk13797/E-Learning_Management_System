<?php include('dbcon.php'); ?>
<?php
$id = $_POST['id'];
mysqli_query($con,"delete from teacher_class_announcements where teacher_class_announcements_id = '$id'")or die(mysqli_error());
mysqli_query($con,"delete from teacher_class_announcements where teacher_class_announcements_id = '$id'")or die(mysqli_error());
?>

