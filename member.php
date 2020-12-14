<?php
$conn = mysqli_connect("localhost","root","", "clubs");
$sql = "INSERT INTO member (Full_name,Phone, Branch, Year, Section, Clubname,Email)
VALUES ('".$_POST['fname']."','".$_POST['phone']."','".$_POST['branch']."','".$_POST['year'] ."','".$_POST['section']."','".$_POST['cname']."','".$_POST['mail']."')";
if(mysqli_query($conn, $sql)){
	echo "<script>location.href='payment.php';</script>";
}
 	
?>