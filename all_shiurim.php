<?
require 'printDL.php';


	$title = 'Shiurim';
	$description = 'Shiurim from Marty\'s class at Bais Chabad in West Bloomfield';
	

//get_parashah(){
	  $url  ="http://beta.chabad.org";
 
  $raw = file_get_contents($url);
  $start = strpos($raw,'Torah Reading:') + strlen('Torah Reading:');
 
  $end = strpos($raw,'</a>',$start);
  $length = $end - $start;
  $parashah = substr($raw, $start, $length);
  $parashah = trim($parashah);
  
  
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$title ?> </title>
<meta name="description" content="<?=$description ?>" />
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
        
        <?php
function new_box(){
	echo '</div><!--end grid_16 -->
        <div class="grid_1"><p></p></div>
        <div class="grid_16 prefix_1 suffix_1 padding_1  up_1 boxed text">';
}

	  if (strstr($parashah, "-")){
	  $doubleParashah = explode("-", $parashah);
	  ListByParashah($doubleParashah[0]);
	  ListByParashah($doubleParashah[1]);
	  }
	  else{
	  //printDL($parashah, "mp3/");
	  //printDL($parashah, "mp3/NC/");
	  ListByParashah($parashah);
	  }
	new_box();
	
	ListByDate();
	new_box();
	ListByType('Tehillim');
	new_box();
	ListByType('Davening');
	new_box();
	ListByType('The Laws of Brochos');
	
	
?>

        </div><!--end grid_16 -->
        <div class="grid_1 "><p></p></div>
         <div class="grid_1 clearfix"><p></p></div>
         <div class="grid_16 prefix_2 suffix_2">
        <p style="font-size:14px;">*If you cannot play audio without first downloading then you need to download <a href="http://get.adobe.com/flashplayer/">Adobe Flash Player</a></p></div><div class="grid_1 clearfix"><p></p></div>
    </div><!--end grid_20 -->
    
  </div><!--end grid_24 -->
</div><!--end container__24 -->
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
