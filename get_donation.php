<?php 
session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['amount'] = $_POST['amount'];
$_SESSION['street'] = $_POST['street'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['state'] = $_POST['state'];
$_SESSION['zip'] = $_POST['zip'];
$_SESSION['card_number'] = $_POST['card_number'];
$_SESSION['card_type'] = $_POST['card_type'];
$_SESSION['exp_date'] = $_POST['exp_date'];
$_SESSION['pin'] = $_POST['pin'];
$_SESSION['message'] = $_POST['message'];


function get_donation(){

    // validate submission
    if (!empty($_POST["name"])
    &&  !empty($_POST["email"])
    &&  !empty($_POST["amount"])
    &&  !empty($_POST["street"])
    &&  !empty($_POST["city"])
    &&  !empty($_POST["state"])
    &&  !empty($_POST["zip"])
    &&  !empty($_POST["card_number"])
    &&  !empty($_POST["card_type"])
    &&  !empty($_POST["exp_date"])
    &&  !empty($_POST["pin"])) {
        $email = $_POST["email"];
        $to = 'binyomintrager@gmail.com, Marty@bais-mordechai.com';
        $subject = "Donation from Website";
        $body = 'Donation:'."\r\n".
        'Name: '.stripslashes($_POST["name"])."\r\n".
        'Email: '.stripslashes($_POST["email"])."\r\n".
        'Amount: '.stripslashes($_POST["amount"])."\r\n".
        'Street: '.stripslashes($_POST["street"])."\r\n".
        'City: '.stripslashes($_POST["city"])."\r\n".
        'State: '.stripslashes($_POST["state"])."\r\n".
        'Zip: '.stripslashes($_POST["zip"])."\r\n".
        'Card Number: '.stripslashes($_POST["card_number"])."\r\n".
        'Card Type: '.stripslashes($_POST["card_type"])."\r\n".
        'Expiration: '.stripslashes($_POST["exp_date"])."\r\n".
        'Pin: '.stripslashes($_POST["pin"])."\r\n".
        'Message: '.stripslashes($_POST["message"]);
        $headers .= 'From:'.$email."\r\n";
        mail($to, $subject, $body, $headers);
			echo '<h3>Thank you very much for your donation!</h3>';
			
	}
    else
    {
		echo '<h3>Sorry, you must fill out all the required fields.</h3>';
		echo '<a href="http://bais-mordechai.com/donate.php">Go Back</a>';
		
    }

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Thank You For Your Donation!</title>
<meta name="description" content="Thank You For Your Donation!" />

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
 <?php get_donation(); ?>
    </div><!--end grid_16 -->
        <div class="grid_1"><p></p></div>
    </div><!--end grid_20 -->
  </div><!--end grid_24 -->
</div><!--end container__24 -->

</body>
</html>


 



 