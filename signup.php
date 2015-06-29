<?php 
session_start();

function  checkEmail($email) {
/* $regexp = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";

 if (!preg_match($regexp, $email)) {
  return false;
 }
 return true; */
 if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
   return false;
  }
else{
  return true; 
  }
}
function signup(){
//connect to database
require 'mysql.php';

$fname = mysql_real_escape_string($_POST['fname']);
$lname = mysql_real_escape_string($_POST['lname']);
$email = mysql_real_escape_string($_POST['email']);
$pkey = 'Torah';
$hash = crypt($email.$pkey);

$sql="INSERT INTO maillist (fname, lname, email, hash)
VALUES
('$fname','$lname','$email', '$hash')";
$sqlcheck = "SELECT email FROM maillist WHERE email ='$email' ";
$query = mysql_query($sqlcheck,$con);
  
    // validate submission
    if (
	!empty($_POST["email"]) 
	&&
	checkEmail($_POST["email"])
	&& mysql_num_rows($query) == 0)
    {
        $to = $email;
        $subject = "You have been added to the mailing list!";
        $body = 'Dear ' .
         $fname . ',<br /><br />' .
         'Thank you for joining my mailing list. <br /><br />'.
		 'Sincerely,<br /><br />'.
		 'Marty Goodman'.
		 '<br /><br />'.
		 '<a href="http://bais-mordechai.com/unsubscribe.php?u='.
		 $hash.
		 '">Unsubscribe</a>';
		$message = '
		  <html>
		  <head>
			<title>You have been added to the mailing list!</title>
		  </head>
		  <body>'.
			$body.
		  '</body>
		  </html>
		  ';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		 
        $headers .= "From:Marty@bais-mordechai.com\r\n";
        mail($to, $subject, $message, $headers);
		$to = "binyomintrager@gmail.com";
		$subject = "New Member";
		$body = "Name = ".
			$_POST["fname"].
			" ".
			$_POST["lname"].
			"\n\n".
			"Email = ".
			$_POST["email"];
			mail($to, $subject, $body, $headers);
			mysql_query($sql);
				 echo '<h3>You have been added to the mailing list.</h3>';
			
	}
    else
    {
        $query = mysql_query($sqlcheck,$con);
		if (empty($_POST["email"])){
			echo '<h3>You must enter an e-mail address</h3>';
		}
		else if (!checkEmail($_POST["email"])){
			echo '<h3>Please enter a valid e-mail address.</h3>';
		}
		else if (mysql_num_rows($query) > 0){
			echo '<h3>You are already on the mailing list.</h3>';
		}
		echo '<br /><a href="MailList.php">Back</a>';
    }
mysql_close($con);
}
?>
<?php 
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['email'] = $_POST['email'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mailing List Sign-Up</title>
<meta name="description" content="Sign-Up for Marty Goodmans mailing list to recieve new about website updates and Divrei Torah" />
<script>
function validateForm()
{
var x=document.forms["mlsignup"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (x==null || x==""){
  alert("You must enter your e-mail address!");
  return false;
  }
else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
  alert("Pleae enter a valid e-mail address!");
  return false;
  }
}
</script>
<?php require 'head.php'; ?>
</head>

<body>
<div class="container_24 ">
<? require 'header.php';?>
<? require 'top_menu.php';?>
<div class="grid_24 content">
<? require 'side_bar.php';?>
<div class="grid_20 alpha omega">
  <div class="grid_1"><p></p></div>
  <div class="grid_16 prefix_1 suffix_1 padding_1 down_1 up_1 boxed text">
      <?php signup(); ?>
   </div><!--end grid_16 -->
        <div class="grid_1"><p></p></div>
    </div><!--end grid_20 -->
  </div><!--end grid_24 -->
</div><!--end container__24 -->

</body>
</html>


 