<?php

$filename = stripslashes($_GET['filename']);
$title = stripslashes($_GET['title']);
$len = filesize($filename);


if (file_exists($filename)){
header('Content-type: audio/mpeg');
header('Content-Disposition: attachment; filename="'.$title.'"');
header("Content-Length: ".$len);
readfile($filename);
}
else {
	die($filename." does not exist");
}
?>