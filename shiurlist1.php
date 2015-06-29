<?
require 'printDL.php';

$parashah = $_GET['pname'];
$class = $_GET['class'];
$type = $_GET['type'];
switch ($class){
	case 'parashah':
	$title = 'Shiurim for Parashas '.$parashah;
	$description = $title.' given my Marty Goodman';
	break;
	case 'new':
	$title = 'New Shiurim';
	$description = 'Most recently uploaded shiurim from Marty\'s class every Wednesday at Bais Chabad in West Bloomfield';
	break;
	case 'type':
	$title = 'Shiurim on '.$type;
	$description = $title.' given my Marty Goodman';
	break;
	}



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
        <div class="grid_1 alpha"><p></p></div>
        <div class="grid_16 prefix_1 suffix_1 padding_1 down_1 up_1 boxed text">
        
        <?php
//$parashah = str_replace("\'", "", $parashah);

switch ($class){
	case 'parashah':
	  if (strstr($parashah, "-")){
	  $doubleParasha = explode("-", $parashah);
	  ListByParashah($doubleParasha[0]);
	  ListByParashah($doubleParasha[1]);
	  }
	  else{
	  //printDL($parashah, "mp3/");
	  //printDL($parashah, "mp3/NC/");
	  ListByParashah($parashah);
	  }
	break;
	case 'new':
	ListByDate();
	break;
	case 'type':
	ListByType($_GET['type']);
	break;
	}
?>

        </div><!--end grid_16 -->
        <div class="grid_1 omega"><p></p></div>
        
         <div class="grid_16 prefix_2 suffix_2">
        <p style="font-size:14px;">*If you cannot play audio without first downloading then you need to download <a href="http://get.adobe.com/flashplayer/">Adobe Flash Player</a></p></div>
    </div><!--end grid_20 -->
    
  </div><!--end grid_24 -->
</div><!--end container__24 -->
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
