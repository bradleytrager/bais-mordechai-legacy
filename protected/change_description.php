<?php session_start();?>
 <?
 require '../mysql.php';
  
$filename = stripslashes($_GET['shiur']);
//echo $filename;

$sql="SELECT dir, parashah 
FROM descriptions 
WHERE filename='".mysql_real_escape_string($filename)."'";
$result = mysql_query($sql,$con);
if ($result != null && $row = mysql_fetch_array($result)) {
  $dir = $row['dir'];
  $parashah = $row['parashah'];
  
  }		
mysql_close($con); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online MP3 Audio Torah Shiurim by Marty Goodman: Bais-Mordechai.com </title>
<meta name="description" content="Hundreds of free online mp3 audio Torah classes given by Marty Goodman as featured on Chabad.org." />
<?
require '../head.php';

?>
<script src="getParashah.js"></script>

<script>
$(document).ready(function(){
  
  	 $("#chumash").val("'.$_SESSION['chumash'].'");
  	getParashah();
  	$("#parashah").val("'.$_SESSION['parashah'].'");
  	$.ajax({                                      
      type: 'POST',
      url: 'get_shiurim_ajax1.php',                         
      data: "parashah="+$('#parashah').val(),               
      dataType: 'json',                   
      success: function(data)         
      {
      $('#shiur').html("<br/>");
        
      for (var i in data){
        var row = data[i]
        var title = row['title'];
        var filename = row['filename'];            //get id
        $('#shiur').append("<option value=\""+filename+"\">"+title+"</option>");}}});
});</script>
<script>
$(document).ready(function(){
  
  
  $("#parashah, #chumash").change(function(){
    $.ajax({                                      
      type: 'POST',
      url: 'get_shiurim_ajax1.php',                  //the script to call to get data          
      data: "parashah="+$('#parashah').val(),               
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
      $('#shiur').html("<br/>");
        
      for (var i in data){
        var row = data[i]
        var title = row['title'];
        var filename = row['filename'];            //get id
        $('#shiur').append("<option value=\""+filename+"\">"+title+"</option>");}}});
        });
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
  
  <?php
  //echo $_SESSION['chumash'];
  
 
  
  
	require '../mysql.php';
	require 'printDL.php';

$title = stripslashes($_POST['title']);
$description = stripslashes($_POST['description']);
$new_filename = $title.'.mp3';
//echo 'New Filename: '.$new_filename.'<br/>';
$old_path = '../'.$dir.$filename;
$new_path = '../'.$dir.$new_filename;

if (strcmp($new_filename, $filename) !=0) {
	if (!file_exists($new_path)) {
		$sql="UPDATE descriptions 
		SET title='".mysql_real_escape_string($title)."',
		filename='".mysql_real_escape_string($new_filename)."',  
		description='".mysql_real_escape_string($description)."' 
		WHERE filename='".mysql_real_escape_string($filename)."'";
		mysql_query($sql,$con);
		rename($old_path, $new_path);
		//echo   'The title of '.$filename.' has been updated to: <b>'.$new_filename.'</b><br />';
		printHeadline('Preview');
		printShiur($title, $new_filename, $description, $dir);
		printNewHeadline('Do Another Shiur');
		}
	else {
		echo 'Sorry the file '.$new_filename.' already exists.  Please choose a different name.';
		}
	}
else {

	$sql="UPDATE descriptions 
	SET description='".mysql_real_escape_string($description)."' 
	WHERE filename='".mysql_real_escape_string($filename)."'";
	mysql_query($sql,$con);
	printHeadline('Preview');
	printShiur($title, $new_filename, $description, $dir);
	printNewHeadline('Do Another Shiur');
	}
  ?>
<form action="editdescription.php" method="post"
enctype="multipart/form-data">
      <table>
      <tr>
  <td>Chumash/Series:</td>
  <td><select name="chumash" id="chumash" onchange="getParashah()" >
        <option value="Bereishit">Bereishit</option>
        <option value="Shemot">Shemot</option>
        <option value="Vayikra">Vayikra</option>
        <option value="Bamidbar">Bamidbar</option>
        <option value="Devarim">Devarim</option>
        <option value="Davening">Davening</option>
        <option value="Tehillim">Tehillim</option>
        <option value="The Laws of Brochos">The Laws of Brochos</option>
         <option value="Leading Services">Leading Services</option>
      </select></td>
  </tr> 
    
      <tr>
  <td>Parasha/Series:</td>
  <td><select name="parashah" id="parashah">
      </select></td>
  </tr>
  <tr><td>Shiur</td>
  <td><select name="shiur" id="shiur"> Shiur</select></td>
  </tr>
      </table>
      
      <br />
      
      <input type="submit" name="submit" value="Get Shiurim" />
    </form>
 <div class="grid_1"><p></p></div>
 
</div>
</div>
	

</div></div>

</body>
</html>
