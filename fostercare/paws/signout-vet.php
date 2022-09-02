<?php
session_start();
include("includes/config.php");
$_SESSION['signin_vet'] == "";
date_default_timezone_set('Asia/Dhaka');
$ldate = date('Y-m-d h:i:s A', time());
mysqli_query($con,"UPDATE vetlog  SET logoutTime = '$ldate' WHERE email = '".$_SESSION['signin_vet']."' ORDER BY id DESC LIMIT 1");
session_unset();
?>
<script type="text/javascript">
	document.location = "index.php";
</script>