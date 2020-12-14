<!DOCTYPE html>
<html>
<head>
	<style>
		h1{
  		    color: white;
			text-shadow: 5px 5px 6px red;
		}
		body{
			background-image: url("bg2.jpg");
			color: white;
			font-size: 30px;
		}
	</style>
</head>
<body>
<?php
$conn2 = mysqli_connect("localhost","root","", "clubs");
$ename4=$_POST['cname2'];
echo "<h1>Registered users</h1>";
$sql14="SELECT DISTINCT Username from event where Eventname='".$ename4."'";
$op=mysqli_query($conn2, $sql14);
?>
</body>
</html>
