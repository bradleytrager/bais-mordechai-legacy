<?php 

function send_email(){
	$headers  = 'MIME-Version: 1.0' . "\r\n";// To send HTML mail, the Content-type header must be set
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From: Marty@bais-mordechai.com"."\r\n";
	
	$subject = stripslashes($_POST['subject']);
	$body_main = stripslashes($_POST["body"]);
	
	require '../mysql.php';
	 
	$query = mysql_query("SELECT *
	FROM maillist ORDER BY `email` DESC");
	mysql_close($con);
	
	echo '<b>Mailing List Names and Emails: </b></br>';
	
	while ($row = mysql_fetch_array($query)){
		//add unsubscribe link to end of email
		$body = $body_main.'<br/><br/>To stop recieving emails 
		<a href="http://bais-mordechai.com/unsubscribe.php?u='.
			 $row['hash'].
			 '">Unsubscribe</a>';
		$to = $row['email'];//$to = "binyomintrager@gmail.com";
		if (strcmp($_POST['salutation'], 'none') == 0){
			$salutation = "";
		}
		else if (strcmp($_POST['salutation'], 'dear') == 0){
			$salutation = "Dear ".ucfirst($row['fname']).",". "<br/><br/>";
		}
		$full_body = '
			  <html>
			  <head>
				<title>'.
				$subject.
				'</title>
			  </head>
			  <body>'.
				$salutation.$body.
			  '</body>
			  </html>';
		mail($to, $subject, $full_body, $headers);
		echo 'Message sent to '.ucfirst($row['fname']).' '.ucfirst($row['lname']).'-'.$row['email'].'<br/>';
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mailing List</title>
<meta name="description" content="Sign-Up for Marty Goodmans mailing list to recieve new about website updates and Divrei Torah" />

<?php require '../head.php'; ?>
</head>

<body>
<div class="container_24 ">
<? require '../header.php';?>
<? require '../top_menu.php';?>
<div class="grid_24 content">
<? require '../side_bar.php';?>
<div class="grid_20 alpha omega">
  <div class="grid_1"><p></p></div>
  <div class="grid_16 prefix_1 suffix_1 padding_1 down_1 up_1 boxed text">
 <?php send_email(); ?>
    </div><!--end grid_16 -->
        <div class="grid_1"><p></p></div>
    </div><!--end grid_20 -->
  </div><!--end grid_24 -->
</div><!--end container__24 -->

</body>
</html>


 



 