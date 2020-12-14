<?php
$conn = mysqli_connect("localhost","root","", "clubs");
$ip_uname=$_POST["uname"];

$ip_pwd=$_POST["pwd"];
$tab_pwd="SELECT password from signup where username='".$ip_uname."'";
if($res=mysqli_query($conn, $tab_pwd)){
	$row=mysqli_fetch_row($res);
	if($ip_pwd==$row[0]){
		echo "<script>location.href='home.php';</script>";
	}
	else{
		echo "<script>location.href='login.html';alert('Wrong username or password');</script>";;
	}
}
?>