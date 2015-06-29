
<?php
include 'head.html';
?>
<?php
require 'printDL.php';

$parashah = stripslashes($_GET['pname']);
$class = $_GET['class'];
$type = $_GET['type'];
switch ($class){
	case 'parashah':
	$page_title = 'Shiurim for Parashas '.$parashah;
	$description = $title.' given my Marty Goodman';
	break;
	case 'new':
	$page_title = 'New Shiurim';
	$description = 'Most recently uploaded shiurim from Marty\'s class every Wednesday at Bais Chabad in West Bloomfield';
	break;
	case 'type':
	$page_title = 'Shiurim on '.$type;
	$description = $title.' given my Marty Goodman';
	break;
	default:
	$page_title = 'Shiurim for '.$parashah;
	$description = $title.' given my Marty Goodman';
	}
?>
<body>
<div data-role="page">
<?php include 'header.php'; ?>
        
        
<div data-role="content">
<?php
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
	default:
	if ($parashah != null){
		ListByParashah($parashah);
	}
	else{
	ListByDate();
	}
	break;
	}
?>

        </div>
       <?php include 'footer.php'; ?>
</div>
</body>
</html>
