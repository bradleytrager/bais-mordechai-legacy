<?php
function get_parashah1() {

$file = fopen("http://bais-mordechai.com/fullkriyah.csv", "r") or exit("Unable to open file!");
$today = time();

while(!feof($file)) {
$array = fgetcsv($file);

$date = $array[0];
if (strtotime($date) > time()) {//finds the first occurance of a future date

$current_parashah = $array[1];
$current_parashah = trim($current_parashah);

if (strcmp($current_parashah, 'Lech-Lecha') == 0){//Remove dash from lecha to avoid
														//being confused with double parashah
	return 'Lech Lecha';
	
	}
	
$current_parashah = strtolower($current_parashah);
$current_parashah = ucwords($current_parashah);
return $current_parashah;
}
}
//echo '<br/>';


fclose($file);
/*
  {
  $string = fgets($file);
  echo 
		$string.'<br/>';
  }*/

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Torah Classes by Marty Goodman: Bais-Mordechai.com </title>
<meta name="description" content="Official site for downloading free audio Torah classes by Marty Goodman on Chumash, Davening, Tehillim, Laws of Brochos and more as featured on Chabad.org." />

<?
require 'head.php';

?></head>

<body>
<div class="container_24 ">
  <?
require 'header.php';

?>
<? require 'top_menu.php';?>
<div class="grid_24 content">
<? require 'side_bar.php';?>
<div class="grid_20 alpha omega">
  <div class="grid_1"><p></p></div>
  <div class="grid_16 prefix_1 suffix_1 padding_1 down_1 up_1 boxed text">
<div class="grid 16 alpha omega ">
<?php echo get_parashah1(); ?>
</div>
 <div class="grid_1"><p></p></div>
 
</div>
</div>
	

</div>

</body>
</html>
