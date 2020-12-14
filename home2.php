<?php
$conn2 = mysqli_connect("localhost","root","", "clubs");
if(isset($_POST["cn"]))
	{
		$ip_cname=$_POST["cn"];
		session_start();
		$_SESSION['var']=$ip_cname;
		echo "<script>location.href='announcements.php';</script>";
	}
?>