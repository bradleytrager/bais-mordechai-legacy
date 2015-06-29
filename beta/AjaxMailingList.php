<?php 
if (!empty($_POST['email']) && !empty($_POST['fname']) && !empty($_POST['lname'])){
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
		$to = "Marty@bais-mordechai.com";
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
			
	
mysql_close($con);
}
?>