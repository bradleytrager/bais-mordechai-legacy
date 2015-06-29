<?php 
function unsubscribe() {

require 'mysql.php';

$hash = mysql_real_escape_string($_GET['u']);
$sql="SELECT email FROM maillist WHERE hash='".$hash."'";
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Unsubscribe </title>

<? require 'head.php';?></head>
<body>
<div class="container_24 ">
  <? require 'header.php';?>
<? require 'top_menu.php';?>
<div class="grid_24 content">
<? require 'side_bar.php';?>
<div class="grid_20 alpha omega">
  <div class="grid_1"><p></p></div>
  <div class="grid_16 prefix_1 suffix_1 padding_1 down_1 up_1 boxed text">
  <?php unsubscribe(); ?>
</div><!--end grid_16 -->
        <div class="grid_1"><p></p></div>
    </div><!--end grid_20 -->
  </div><!--end grid_24 -->
</div><!--end container__24 -->

</body>
</html>