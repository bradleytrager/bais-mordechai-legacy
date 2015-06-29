

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online MP3 Audio Torah Shiurim by Marty Goodman: Bais-Mordechai.com </title>
<meta name="description" content="Hundreds of free online mp3 audio Torah classes given by Marty Goodman as featured on Chabad.org." />
<?
require '../head.php';

?></head>

<body>
<div class="container_24 ">
  <?
require '../header.php';

?>
<? require '../top_menu.php';?>
<div class="grid_24 content">
<? require '../side_bar.php';?>
<div class="grid_20 alpha omega">
  <div class="grid_1"><p></p></div>
  <div class="grid_16 prefix_1 suffix_1 padding_1 down_1 up_1 boxed text">
  
<?php
$filename = trim($_GET['shiur']);
echo 'Filename: '.$filename.'<br/>';
$title = trim($_POST['title']);
echo 'New Title: '.$title.'<br/>';
$newFileName = $title.'.mp3';
echo 'New Filename: '.$newFileName.'<br/>';
$description = trim($_POST['description']);
  
// $con = mysql_connect("50.63.244.174", "baismordechai","Chum@shim5");
// if (!$con){
//   die('Could not connect: ' . mysql_error());
//   }
// 
// mysql_select_db("baismordechai", $con);
// $shiur = $_POST['shiur'];
// $sql="SELECT dir FROM descriptions WHERE filename='$filename'";
// $result = mysql_query($sql,$con);
// if ($result != null && $row = mysql_fetch_array($result)) {
//   $dir = $row['dir'];
//   }		
// mysql_close($con); 
  
  
$con = mysql_connect("50.63.244.174","baismordechai","Chum@shim5");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("baismordechai", $con);
$sql = "
UPDATE descriptions 
SET title='$title', 
description='$description'
WHERE filename='$filename'";

mysql_query($sql,$con);
//if (mysql_query($sql,$con)) {

// //rename file on server
// filename='".mysql_real_escape_string($newFileName)."'
// $oldFileName = '../'.$dir.$filename;
// $newFileName = '../'.$dir.$newFileName;
// 
// 
// 	if (file_exists($newFileName)) {
// 		echo $newFileName . " already exists. ";
// 	}
// 	else if(!file_exists($oldFileName)) {
// 		echo $oldFileName."File does not exist";
// 		}
// 	else {
// 		rename($oldFileName, $newFileName);
// 		echo "Success";
// 	}
echo   'The title of '.$filename.' has been updated to: '.$title.'<br />';
echo   'The description of '.$filename.' has been updated to: <br />'.$description;
//}
  // else {
//   echo 'database error';
//   }
  ?>
  <br  />
  <a href="selectParashah.php">Do Another Shiur</a>

 <div class="grid_1"><p></p></div>
 
</div>
</div>
	

</div></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
