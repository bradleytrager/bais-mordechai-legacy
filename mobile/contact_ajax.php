<?php
if (!empty($_POST['email']) && !empty($_POST['message'])){
$to      = 'binyomintrager@gmail.com, Marty@bais-mordechai.com';
$subject = 'Bais-Mordechai Contact';
$from = $_POST['email'];
$name = $_POST['name'];
$message = 'From: '.$name."\r\n".$_POST['message'];
$headers = 'From:'. $from ;

mail($to, $subject, $message, $headers);

}

?>