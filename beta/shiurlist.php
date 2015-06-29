<?php
$parashah = stripslashes($_GET['pname']);
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
	default:
	$title = 'Shiurim for '.$parashah;
	$description = $title.' given my Marty Goodman';
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />
<?php include_once 'head.php'; ?>
</head>
<body>
<?php include_once 'top.php'; ?>

<div class="row">
			<div class="hero-unit smallerTopPadding">
<?php 
include_once 'printDL.php'; 
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



?></div></div>

<?php include_once 'footer.php'; ?>