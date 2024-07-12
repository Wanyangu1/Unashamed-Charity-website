<?php
// database connection code
if(isset($_POST['name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','transnzoia');

// get the post records

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
 
// database insert SQL code
$sql = "INSERT INTO `unashamed` (`Id`, `fldname`, `fldphone`, `fldmessage`) VALUES ('0', '$name', '$phone', '$message')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{}
}
else
{
	echo "Are you a genuine visitor?";	
}
?>
<!DOCTYPE html>
<html>
    <head>
      
        <title>DANTOWN ELECTRICALS E-COMMERCE WEBSITE</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
    </head>
    <body style="background-color:rgb(211, 248, 248);">
        <div class="amo">

        <div class="shom">

            <legend>YOUR DETAILS HAVE BEEN SUBMITTED SUCCESSFULLY</legend>
            <form>
    
    <div class="form">
        <div class="pea">
<p style="font-family: cursive;">
  Thankyou for your submissions, your enquiry has been submitted, you will recieve a feedback soon.
          </p>
<br>
            <p><span> By clicking <a href="ehome.html">Accept</a>, you agree to our<a href="#">Terms,</a><a href="#">Privacy policy</a> and <a href="#">Cookies policy.</a> 
    You may receive sms notifications from us and can opt out at any time.
            <p>&nbsp;</p>
            </div>
            
                <div class="submit">
                    <p>
            <a href="uhome.html"><input type="button" value="ACCEPT"/></a>
            </div>
            </p>
</div>
</form>
                </div>
                </div>

    </body>
    </html>