
<?php 

function addMenu($name){
	
	//$file = fopen("/kunden/homepages/38/d90108673/htdocs/bais-mordechai/".$name.".txt", "r") or exit("Unable to open file!");
$file = fopen($name.".txt", "r") or exit("Unable to open file!");

//Output a line of the file until the end is 

/* echo '<li><a href="ParashaList.php?cname='.
	$name.
	'" class="MenuBarItemSubmenu">'.
	$name.
	'</a>'; */
	echo '<li><a class="MenuBarItemSubmenu">'.
	$name.
	'</a>';

echo '<ul>';

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



// echo 
// '<div class="grid_24 top_menu" style="background-color:#CCC">
//   <ul id="MenuBar1" class="MenuBarHorizontal"><li><a href="http://bais-mordechai.com/">Home</a> </li>';
// 	addMenu(Breishit);
// 	addMenu(Shemot);
// 	addMenu(Vayikra);
// 	addMenu(Bamidbar);
// 	addMenu(Devarim);
//   echo '</ul></div>';
  

echo 
'<div id ="sidebar" class="grid_4 alpha sidebar1 ">
<ul id="MenuBar2" class="MenuBarVertical">';
	addMenu(Bereishit);
	addMenu(Shemot);
	addMenu(Vayikra);
	addMenu(Bamidbar);
	addMenu(Devarim);
  echo '<li><a href="http://bais-mordechai.com/shiurlist.php?type=Davening&class=type">Davening</a></li>
<li><a href="http://bais-mordechai.com/shiurlist.php?type=Tehillim&class=type">Tehillim</a></li>
<li><a href="http://bais-mordechai.com/shiurlist.php?type=The%20Laws%20of%20Brochos&class=type">Laws of Brochos</a></li>
	  
</ul>
<br/><br/>';

 //echo '<a href="https://plus.google.com/113753418198118639907?rel=author"  style="display:none;">Google</a>';
  echo '<div class="grid_3 prefix_1 alpha omega">';
  require 'facebook_like.php';
  echo '</br>';
  require 'google_plus_1.php'; 
  
echo'<!-- end .sidebar1 --></div></div>';


?>