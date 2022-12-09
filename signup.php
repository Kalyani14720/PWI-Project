<?php
$conn = mysqli_connect("localhost","root","", "clubs");
echo "<script>if('".$_POST['pwd']."'.length<=6){alert('The password must be more than 6 characters');location.href='signup.html';}</script>";
$sql = "INSERT INTO signup (username, email, password)
VALUES ('".$_POST['uname']."','".$_POST['mail'] ."','".$_POST['pwd']."')";

$_SESSION['var']=$uname2;
if(mysqli_query($conn, $sql)) {
  	echo "<script>location.href='login.html';</script>";
} else {
	echo "<script>location.href='signup.html';alert('Username already exists');</script>";
email_id= $_POST['mail'];
}
?>