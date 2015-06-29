<?php 
function unsubscribe() {
//connect to database
require 'mysql.php';

$hash = $_GET['u'];
$sql="SELECT email FROM maillist WHERE hash='$hash'";
$result = mysql_query($sql,$con);
if ($row = mysql_fetch_array($result)){
	$email = $row['email'];
$sql="DELETE FROM maillist
WHERE hash = '$hash'";
$result = mysql_query($sql,$con);

echo $email.' has been removed from the mailing list';

}


	
mysql_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Unsubscribe </title>
<meta name="description" content="Unsubscribe from Marty's mailing list" />

<?php include_once 'head.php'; ?>


</head>
<body>
<?php include_once 'top.php'; ?>
	<div class="row">
			<div class="hero-unit">
			<h1>Unsubscribe</h1><hr/>
  <?php unsubscribe(); ?>
</div></div>
<?php include_once 'footer.php'; ?>