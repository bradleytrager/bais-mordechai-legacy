<?php 
//connect to database
function unsubscribe(){
require 'mysql.php';
$hash = mysql_real_escape_string($_GET['u']);

$sql="SELECT email FROM maillist WHERE hash='".$hash."'";
$result = mysql_query($sql,$con);

if ($row = mysql_fetch_array($result)){
	echo 'Are you sure you would like to remove '.$row['email'].' from the mailing list?';
	echo '<a href="un_subscribe.php?u='.$hash.'">Yes</a>        <a href="/">No</a>';
}

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