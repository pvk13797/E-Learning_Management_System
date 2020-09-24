<?php
 session_start(); 
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
<?php echo "<h2 style='text-align:center;color:red;'>"."Session Expired...Please Try Again To Login"."</h2>"; ?>
<script>
window.location = "index.php";
</script>
<?php
}
$session_id=$_SESSION['id'];

$user_query = mysqli_query($con,"select * from users where user_id = '$session_id'")or die(mysqli_error());
$user_row = mysqli_fetch_array($user_query);
$user_username = $user_row['username'];
?>