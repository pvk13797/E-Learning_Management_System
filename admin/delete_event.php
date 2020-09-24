<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysqli_query($con,"delete from event where event_id = '$get_id'")or die(mysqli_error());
?>
<script>
window.location = 'calendar_of_events.php';
</script>