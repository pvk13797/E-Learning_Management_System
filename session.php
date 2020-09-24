<?php
//Start session
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
?>