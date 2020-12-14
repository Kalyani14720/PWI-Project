<!DOCTYPE html>
<head>
	<title>
		Admin Login
	</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
		<h1>Admin Login</h1>	
		<form style="background-color:white" action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="post">
  <div class="imgcontainer">
    <img src="icon.jpg" alt="img" class="image">
  </div>

  <div class="container">

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="uname" required>


    <label for="pwd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" id="pwd" required>

    <button type="submit" name="submit2">Login</button>
    <span class="psw"><a href="#">Forgot password?</a></span>
    
  </div>
    
</form>
<?php
$conn = mysqli_connect("localhost","root","", "clubs");

if(isset($_POST["submit2"]))
{
$ip_uname=$_POST["uname"];
session_start();
$_SESSION['var']=$ip_uname;
$ip_pwd=$_POST["pwd"];
$tab_pwd="SELECT password from login where username='".$ip_uname."'";
if($res=mysqli_query($conn, $tab_pwd)){
  $row=mysqli_fetch_row($res);
  if($ip_pwd==$row[0]){
    echo "<script>location.href='admin.php';</script>";
  }
  else{
    echo "<script>location.href='adminlogin.php';alert('Wrong username or password');</script>";;
  }
}
}
?>
</body>
</html>