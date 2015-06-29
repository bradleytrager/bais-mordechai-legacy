

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
if(!empty($_POST['title']))
{
$parashah = stripslashes($_POST['parashah']);
$directory = $_POST['series'];
$description = stripslashes($_POST['description']);
$title = stripslashes($_POST['title']);

//if ($_POST["series"] == "mp3/"){
//$baseFileName = $_POST["parashah"].$_POST["suffix"].'.mp3';
//$title = $_POST["parashah"].$_POST["suffix"];
//}
//else if ($_POST["series"] == "mp3/NC/"){
//$baseFileName = $_POST["parashah"].'NC'.$_POST["suffix"].'.mp3';
// $title = $_POST["parashah"].' '.$_POST["suffix"];
//}
$baseFileName = $title.'.mp3';
$newFileName = '../'.$directory.$baseFileName;
$titleArray = explode(' ', $_POST["title"]);
$number = $titleArray[1];
if(!is_numeric($number)){
	$number = 0;
}

if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
      if (file_exists($newFileName))
      {
      echo $title . " already exists. ";
      }
	  else 
	  {
	  move_uploaded_file($_FILES["file"]["tmp_name"],
      $newFileName);
	  chmod($newFileName, 0755);
	  
	   require 'mysql.php';
	   require 'printDL.php';

		$sql="INSERT INTO descriptions (`number`, filename, title, description, dir, parashah, ultime)
VALUES
('".mysql_real_escape_string($number)."', 
 '".mysql_real_escape_string($baseFileName)."', 
'".mysql_real_escape_string($title)."', 
'".mysql_real_escape_string($description)."', 
'".mysql_real_escape_string($directory)."', 
'".mysql_real_escape_string($parashah)."', 
CURDATE())";
		mysql_query($sql,$con);
		mysql_close($con);
		echo $baseFileName.' has been uploaded.';
		printNewHeadline('Preview');
		printShiur($title, $baseFileName, $description, $directory);
		
		//echo '<h3>Description:</h3><br />'.$description;
	  }
      
    }
}
else{
	//if (empty($_POST['parashah']) ) echo 'You Must Select a Parashah';
	if (empty($_POST['title'])) echo 'You Must Enter a Title';
}

?>

 <div class="grid_1"><p></p></div>
 
</div>
</div>
	

</div></div>

</body>
</html>
