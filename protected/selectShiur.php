

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
 
 <form action="editdescription.php" method="post" enctype="multipart/form-data">
      <table>
      <tr>
  		<td>Shiur Name:</td>
  		<td><select name="shiur" id="shiur">
        <?php 
		$parashahName = stripslashes($_POST['parashah']);
		
		//echo 'c'.$parashahName.'c';
		require '../mysql.php';
		$sql="SELECT filename, title
				FROM descriptions 
				WHERE parashah='".mysql_real_escape_string($parashahName)."' 
				ORDER BY `number` ASC, `title` ASC";
					$result = mysql_query($sql);

		while($row = mysql_fetch_array($result))
  		{
  			echo '<option value="'.
			$row['filename'].
			'">'.
			$row['title'].
			'</option>';  
  		}
		 ?>
		
		</select></td>
  </tr> 
    
      
      </table>
      
      <br />
      
      <input type="submit" name="submit" value="Get Description" />
    </form>

 <div class="grid_1"><p></p></div>
 
</div>
</div>
	

</div></div>

</body>
</html>
