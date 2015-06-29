<?php
if (!empty($_POST['email']) && !empty($_POST['message'])){
$to      = 'Marty@bais-mordechai.com';
$subject = 'Bais Mordechai Contact';
$from = $_POST['email'];
$message = $_POST['message'];
$headers = 'From:'. $from ;

mail($to, $subject, $message, $headers);
echo 'Thank you';
}

?>