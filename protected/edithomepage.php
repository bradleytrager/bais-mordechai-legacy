<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require '../head.php'; ?>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</head>

<body>
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
  <div class="grid_18 down_1 up_1 boxed text">
<form action="updatehp.php" method="post">
<textarea rows="30" cols="86" name="homepage" type="text" >
<?php 
$file = fopen("../welcome.txt", "r") or exit("Unable to open file!");
 while(!feof($file))
  {
  $string = fgets($file);
  echo $string;
  }
fclose($file);
 ?>
</textarea> 
<input type="submit" value="Update">
</form> 
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


