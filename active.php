<!DOCTYPE html>
<html>
<head>
	<title>Actice Clubs</title>
	<style>
		h1{
            text-align:center;
            font-size: 60px;
            text-shadow: 5px 5px 6px red;
            color: white;
          }
          body{
			background-image: url("bg2.jpg");
			color: white;
			font-size: 30px;
		}
	</style>
</head>
<body>
	<h1>Most active clubs</h1>
<?php
$conn2 = mysqli_connect("localhost","root","", "clubs");
$sql17="SELECT DISTINCT Clubname,count(Clubname) FROM announcement ORDER BY Clubname DESC;";
$op=mysqli_query($conn2, $sql17);
while($row=mysqli_fetch_row($op)){
		
		print "<pre>";
		echo "<ul><li>";
		print($row[0]);
		echo "</li></ul>";
		echo "<br>";
		echo "Number of announcements:".$row[1];
		print "<pre>";
	}

?>
</body>
</html>