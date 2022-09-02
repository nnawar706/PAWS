<?php
session_start();
include("includes/config.php");
$_SESSION['signin'] == "";
date_default_timezone_set('Asia/Dhaka');
$ldate = date('Y-m-d h:i:s A', time());
mysqli_query($con,"UPDATE userlog  SET logoutTime = '$ldate' WHERE email = '".$_SESSION['signin']."' ORDER BY id DESC LIMIT 1");
session_unset();
?>
<script type="text/javascript">
	document.location = "index.php";
</script>