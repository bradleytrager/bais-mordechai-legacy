<?php

session_start();
$_SESSION['chumash'] = $_POST['chumash'];
$_SESSION['parashah'] = $_POST['parashah'];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online MP3 Audio Torah Shiurim by Marty Goodman: Bais-Mordechai.com </title>
<meta name="description" content="Hundreds of free online mp3 audio Torah classes given by Marty Goodman as featured on Chabad.org." />
<?
require '../head.php';

?>
<script>
$(document).ready(function() {
	$("#description").keyup(function() {
	
		var len = $(this).val().length;
		var charsLeft = 1000 - len;
		$("#char_count").html(String(charsLeft) + " characters remaining");
		
	});
	

});
$(window).bind('beforeunload', function(){
  return 'Are you sure you want to leave?';
});
</script>
</head>

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
 <form action="change_description.php?shiur=<?= stripslashes($_POST['shiur'])?>" method="post"
enctype="multipart/form-data">

<h3>Title:</h3>
      <textarea rows="2" cols="55" name="title" type="text" ><?php 
	   require '../mysql.php';
	   
	$shiur = stripslashes($_POST['shiur']);
	$sql="SELECT title 
	FROM descriptions 
	WHERE filename='".mysql_real_escape_string($shiur)."'";
	$result = mysql_query($sql,$con);
			if ($result != null && $row = mysql_fetch_array($result))
  {
  echo $row['title'];
  }		
	mysql_close($con);
	 ?></textarea>
     <h3>Description:</h3>
      <textarea rows="10" cols="55" id="description" name="description" type="text" maxlength="1000"><?php 
	 require '../mysql.php';
	
	$sql="SELECT description 
	FROM descriptions 
	WHERE filename='".mysql_real_escape_string($shiur)."'";
	$result = mysql_query($sql,$con);
			if ($result != null && $row = mysql_fetch_array($result))
  {
  echo $row['description'];
  }		
	mysql_close($con);
	 ?></textarea>
	
      <br />
      <span id="char_count"></span>
      <br />
      <input type="submit" id="submit" name="submit" value="Update Title/Description" />
    </form>
 <div class="grid_1"><p></p></div>
 
</div>
</div>
	

</div></div>

</body>
</html>
