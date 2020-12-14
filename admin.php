
<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
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
		#cl2{
			width: 190px;
			height: 30px;
			font-size: 20px;
			background-color: green;
			border-radius: 20px;
		}

		}
		h1{
  		    color: white;
			text-shadow: 5px 5px 6px red;
		}
		.tarea{
			float:right;
			margin-left:1000px;
			margin-right: 200px;

		}
		.harea{
			float:right;
			margin-left:1000px;
			margin-right: 250px;
		}
		.barea{
			float:right;
			margin-left:800px;
			margin-right: 250px;
			margin-top: 50px;
		}

	</style>
</head>
<body>
	<h1>MEMBER REQUESTS</h1>
	<h1 class="harea">ANNOUNCEMENTS</h1>
	<form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
		<textarea class="tarea" name="ta1" id="ta1" rows="20" cols="60" name="announcement">
				
		</textarea>
		<input class="barea" type="text" placeholder="Enter clubname" name="cname" id="cname" required>
		<input class="barea" type="text" placeholder="Enter event name" name="ename" id="ename" required>

		<input class="barea" name="n1" id="cl1" type="submit" value="submit"/>
	</form>
	<?php
	error_reporting(0);
	$conn2 = mysqli_connect("localhost","root","", "clubs");
	/* $sql1="SELECT Email from signup"
	$op1=mysqli_query($conn,$sql1)
	$row1=mysqli_fetch_row($op1[0]) */

	if(isset($_POST["n1"]))
	{
		$sql11="INSERT into announcement (notification, Clubname) VALUES('".$_POST['ta1']."','".$_POST['cname']."')";
		mysqli_query($conn2, $sql11);
	}
	session_start();
	$clubname2=$_SESSION['var'];
	$_SESSION['var6']=$clubname2;
	$sql6="SELECT Full_name, Phone, Branch,Year, Section,Email,Clubname from member where Clubname='".$clubname2."'";
	$op=mysqli_query($conn2, $sql6);
	$sub=!empty($_POST['ta1'])? $_POST['ta1']: '';
	if($op===false){
		die("failed");
	}
	else {

	while($row=mysqli_fetch_row($op)){
	
		print "<pre>";
		print("Name: ".$row[0]."\n");
		$name=$row[0];
		
		session_start();
		$_SESSION['var4']=$name;
		
		print("Phone number: ".$row[1]."\n");
		print("Branch: ".$row[2]."\n");
		print("Year: ".$row[3]."\n");
		print("Section: ".$row[4]."\n");
		
		print "<pre>";
		echo "<form method='post' action='admin2.php'>";
	 	echo "<a style='color: black;' id='cl1' href='mailto:".$row[5]."?subject=Hello, Access granted! check the website to know  more'>Allow access</a>";
	    echo "<a style='color: black;' name='a2' id='cl1' href='mailto:".$row[5]."?subject=Hello, We are sorry to inform that your request to be a club member is denied.?'>Deny access</a>";
	   echo "<button name='b2' type='submit' id='cl1'>Update</button>";
	    echo "<a style='color: black;' id='cl1' class='barea' href='mailto:".$row[5]."?subject=Event notification&body=".$sub."'>Send Mail</a>";	
	    echo "</form>";	   
		
	}
		echo "<br>";
		echo "<br>";
		echo "<form method='post' action='event_reg.php'>";
		echo "<input type='text' placeholder='Enter event name' name='cname2' id='cname' required>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<input name='n2' id='cl2' type='submit' value='Check registration'/>";
		echo "</form>";
		}
		
	?>
	
		

	
</body>
</html>