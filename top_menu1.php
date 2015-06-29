<?php 

function addMenu($name){
	
	$file = fopen("http://bais-mordechai.com/".$name.".txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is 

/* echo '<li><a href="ParashaList.php?cname='.
	$name.
	'" class="MenuBarItemSubmenu">'.
	$name.
	'</a>'; */
	echo '<li><a href="/">'.
	$name.
	'</a>';

echo '<ul class="child">';

while(!feof($file))
  {
  $string = fgets($file);
  echo '<li><a href="http://bais-mordechai.com/shiurlist.php?pname='.
  		$string.
		'&class=parashah" >'.
		$string.
		'</a></li>';
  }

fclose($file);
echo '</ul>';
echo '</li>';
}


echo 
'<div class="grid_24" style="background-color:#CCC">
  <ul id="nav"><li><a href="http://bais-mordechai.com/">Home</a> </li>';
	addMenu(Breishit);
	addMenu(Shemot);
	addMenu(Vayikra);
	addMenu(Bamidbar);
	addMenu(Devarim);
  echo '</ul></div>';
  
  ?>