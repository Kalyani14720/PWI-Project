<?php
$conn2 = mysqli_connect("localhost","root","", "clubs");
session_start();
$name=$_SESSION['var4'];
$clname=$_SESSION['var6'];
$sql16="DELETE FROM member WHERE Full_name='".$name."' and Clubname='".$clname."'";
if(mysqli_query($conn2,$sql16)){
	echo "<script>location.href='admin.php';</script>";
}
?>