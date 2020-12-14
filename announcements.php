<!DOCTYPE html>
<html>
<head>
<style>
	body{
			background-image: url("bg2.jpg");
			color: white;
			font-size: 20px;
		}
		#cl1{
			width: 150px;
			height: 30px;
			font-size: 20px;
			background-color: green;
			border-radius: 20px;

		}
</style>

</head>
<body>
	<script>
		var cnt=0;
		function display()
		{
		//alert('Successfully registered!');
		/*var e = document.getElementById('cl1');
       	if(e.style.display == 'block')
          	e.style.display = 'none';
       	else
          	e.style.display = 'block';*/
       cnt=cnt+1;
          
	}

	</script>
<?php
$conn2 = mysqli_connect("localhost","root","", "clubs");
session_start();
$clubname2=$_SESSION['var'];
$ename=$_SESSION['var'];
$sql6="SELECT notification,event_name FROM announcement WHERE Clubname='".$clubname2."'";
$op=mysqli_query($conn2, $sql6);
while($row=mysqli_fetch_row($op)){
		
		print "<pre>";
		print($row[0]);
		
		print "<pre>";
		echo "<form method='post'>";
		echo "<input type='text' placeholder='Enter full name' name='n5' required>";
		echo "<input name='n4' id='cl1'  type='submit' value='Register' onclick='display()'/>";
		echo "</form>";
		if(isset($_POST["n4"]))
		{
			echo "<script>location.href='announcements.php';alert('Successfully registered!.');</script>";
			
			$sql11="INSERT into event (Username, Eventname) VALUES('".$_POST['n5']."','".$row[1]."')";
			if(mysqli_query($conn2, $sql11))
				echo "<script>location.href='announcements.php';alert('Success!.');</script>";
			else
			{
				echo("Error:" . $conn2->error);
			}
		}
	}
	$sql7="DELETE FROM event WHERE Eventname=''";
	mysqli_query($conn2, $sql7);
?>
</body>
</html>