<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Payment Details</title>
	<style type="text/css">
          table{
            
          }
          form{
            border-left: 10px solid black;
          }
          body{
            color: white;
            background-image: url("bg2.jpg");
          }
          tr{
            padding: 2%;
          }
           h1{
            text-align:center;
            font-size: 60px;
            text-shadow: 5px 5px 6px red;
            color: white;
          }
          div{
            border: 15px solid green;
            margin-left: 25%;
            margin-right: 25%;
            padding: 1%;
          }
          .button{
            background-color: green;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            font-size: 16px;

          }
          a{
            color: white;
          }
          p{
            font-size: 120%;
          }
        </style>

</head>
<body>
	<h1>PAYMENT</h1>
	<p>You need to pay Rs.100 to be a member of this club</p>
      <div>
        <table class="center">
            <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
               <tr>
                   <td><label for="cardno"><p>Card Number :</p></label></td>
                   <td><input type="text" name="cardnum" id="cardnum" placeholder="xxxx xxxx xxxx xxxx" value=""></td>
               </tr> 
               <tr>
                <td><label for="Expdate"><p>Valid Upto :</p></label></td>
                <td><input type="text" name="expdate" id="expdate" placeholder="MM/YY" value=""></td>
                <td><label for="cvv"><p>CVV :</p></label></td>
                <td><input type="number" name="cvv" id="cvv" value=""></td>
               </tr>
               <tr>
                   <td><label for="cardname"><p>Card Holder Name :</p></label></td>
                   <td><input type="text" name="cardname" id="cardname" value=""></td>
               </tr>
               <tr>
             
                  
                <table class="center">
                    </tr>
                    
                </table>
                
                <br>
                    <input class="button" type="submit" value="submit" name="Submit1">
                    <input class="button" type="reset">
            </form>
        </table>
      </div>
<?php
$conn = mysqli_connect("localhost","root","", "clubs");
if(isset($_POST["Submit1"]))
{
$sql = "INSERT INTO payment (Card_number, Valid_till, CVV)
VALUES ('".$_POST['cardnum']."','".$_POST['expdate'] ."','".$_POST['cvv']."')";
if(mysqli_query($conn, $sql))
{
  echo "<script>location.href='home.html';alert('Payment successful, You will be notified once admin gives you access permission')</script>";
}
else{
  echo "error";
}
}
?>

</body>
</html>