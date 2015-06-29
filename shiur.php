<?


function printShiur($title, $filename, $description, $dir){
	echo '<table style="width:100%;"><tr><td style="width:50%;text-decoration:underline;">'.
	 $title.
	 '</td>
            <td align="center"><object type="application/x-shockwave-flash" 
            data="dewplayer.swf" width="200" height="20" id="dewplayer" 
            name="dewplayer"><param name="wmode" value="transparent" />
            <param name="movie" value="dewplayer.swf" /> 
            <param name="flashvars" value="mp3='.
	  $dir.
	 $filename.
	  '&amp;nopointer=1" /> <a href="'.
	  $dir.
	 $filename.
	  '">Listen</a></object>'.
	 '</td>'.
	 '<td><a href="download.php?filename='.
	 $dir.
	 $filename.
	 '&title='.
	 $title.'.mp3'.
	 '">Download</a></td>'.
	 '</tr><caption align="bottom" style="font-size:14px;font-style:italic;">'.
	$description.
	'</caption></div></table>';
}

require 'mysql.php';

$shiur = stripslashes($_GET['shiur']);

$query = sprintf("SELECT *
					FROM descriptions 
    				WHERE title='%s'",
    mysql_real_escape_string($shiur));
   

$result = mysql_query($query);
	
	

while ($row = mysql_fetch_array($result)){
	$title = $row['title'];
	$description = $row['description'];
	$filename = $row['filename'];
	$dir = $row['dir'];
}
	mysql_close($con);



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$title ?> </title>
<meta name="description" content="<?=$description ?>" />
 <meta name="author" content="Marty Goodman">
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
<? require 'media_bar.php';?>
    <div class="grid_20 alpha omega">

        <div class="grid_1 alpha"><p></p></div>
        <div class="grid_16 prefix_1 suffix_1 padding_1 down_1 up_1 boxed text">
        
        <?php
printShiur($title, $filename, $description, $dir);
?>

        </div><!--end grid_16 -->
        <div class="grid_1 omega"><p></p></div>
        
         <div class="grid_16 prefix_2 suffix_2">
        <p style="font-size:14px;">*If you cannot play audio without first downloading then you need to download <a href="http://get.adobe.com/flashplayer/">Adobe Flash Player</a></p></div>
    </div><!--end grid_20 -->
    
  </div><!--end grid_24 -->
</div><!--end container__24 -->

</body>
</html>
