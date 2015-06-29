<?php
function printHeadline($headline){
	echo '
			<h1>'.$headline.'</h1><hr />';
}
function printNewHeadline($headline){
	
	echo '</div></div><div class="row">
			<div class="hero-unit smallerTopPadding">';
	printHeadline($headline);
	  
}

function printShiur($title, $filename, $description, $dir){
	echo '<h2 style="display:inline;">'.$title.'</h2>
				
				&nbsp;&nbsp;<object type="application/x-shockwave-flash" 
            data="../dewplayer.swf" width="200" height="20" id="dewplayer" 
            name="dewplayer"><param name="wmode" value="transparent" />
            <param name="movie" value="../dewplayer.swf" /> 
            <param name="flashvars" value="mp3=../'.
	  $dir.
	 $filename.
	  '&amp;nopointer=1" /> <a href="../'.
	  $dir.
	 $filename.
	  '">Listen</a></object>&nbsp;&nbsp;
				<a href="../download.php?filename='.
	 $dir.
	 $filename.
	 '&title='.
	 $title.'.mp3'.
	 '"><i class="icon-download-alt player" ></i>&nbsp;Download</a><p>'
				.$description.
				'</p>';
}

function ListByDate($headline, $timespan = 1209600){

require '../mysql.php';

$all = mysql_query("SELECT title, filename, UNIX_TIMESTAMP(ultime), description, dir FROM descriptions ORDER BY `ultime` DESC, `filename` ASC");
mysql_close($con);

$TWO_WEEKS = 1209600;
$SPAN = 1.5*$TWO_WEEKS ;
$time=gettimeofday();
$currentTime=(int)$time[sec];
$n = 0;
while ($row = mysql_fetch_array($all)){
	$ultime = (int)$row['UNIX_TIMESTAMP(ultime)'];
	//echo 'Current Time = '.$currentTime.' seconds';
	$elapsedTime = $currentTime - $ultime;
	//echo 'Elapsed Time = '.$elapsedTime.' seconds';
	if ($elapsedTime < $SPAN){
		$newShiurim['title'][$n] = $row['title'];
		$newShiurim['filename'][$n] = $row['filename'];
		$newShiurim['dir'][$n] = $row['dir'];
		$newShiurim['date'][$n] = $ultime;
		$newShiurim['description'][$n] = $row['description'];
		
		$n++;
	}
	 
}

$sharedDate = $newShiurim['date'][0];
printHeadline($headline.date("l F j, Y", $sharedDate));


for ($i=0; $i < sizeof($newShiurim['dir']); $i++){
	if ($newShiurim['date'][$i] != $sharedDate){
	$sharedDate = $newShiurim['date'][$i];

	printNewHeadline($headline.date("l F j, Y", $sharedDate));


}

printShiur($newShiurim['title'][$i],$newShiurim['filename'][$i], $newShiurim['description'][$i], $newShiurim['dir'][$i]);

		}
	
//echo '<br />';
}
function ListByType($type){
	require '../mysql.php';
	
	$result = mysql_query("SELECT number, filename, title, description, dir FROM descriptions WHERE parashah='".mysql_real_escape_string($type)."' ORDER BY `number` ASC, `title` ASC");
	
	mysql_close($con);

//store shiurim in array
$n = 0;
while ($row = mysql_fetch_array($result)){
	
		$shiurim['filename'][$n] = $row['filename'];
		
		$shiurim['title'][$n] = $row['title'];
		$shiurim['dir'][$n] = $row['dir'];
		$shiurim['description'][$n] = $row['description'];
		
		$n++;
}

//print out shiurim 

printHeadline('Classes on '.$type);
  for ($i=0; $i < sizeof($shiurim['dir']); $i++){


printShiur($shiurim['title'][$i], $shiurim['filename'][$i], $shiurim['description'][$i], $shiurim['dir'][$i]);
}
	
//echo '<br />';
	
}


function ListByParashah($parashah){
  $parashah = str_replace("\\","",$parashah);
  $parashah = trim($parashah);
  // 
  require '../mysql.php';

	
	$result = mysql_query( "SELECT filename, title, description, dir 
							FROM descriptions 
							WHERE parashah='". mysql_real_escape_string($parashah)."' 
							ORDER BY `dir` DESC, `number` ASC, `filename` ASC");
	
	mysql_close($con);

//store shiurim in array
$n = 0;
while ($row = mysql_fetch_array($result)){
		$shiurim['title'][$n] = $row['title'];
		$shiurim['filename'][$n] = $row['filename'];
		$shiurim['dir'][$n] = $row['dir'];
		$shiurim['description'][$n] = $row['description'];
		if (strcmp($shiurim['dir'][$n], 'mp3/') == 0) {
			$shiurim['date'][$n] = '(2004 - 2007)';
			}
		else if (strcmp($shiurim['dir'][$n], 'mp3/NC/') == 0) {
			$shiurim['date'][$n] = '(2012)';
			}
		$n++;
}

//print out shiurim according to series
$currentSeries = $shiurim['dir'][0];

printHeadline('Classes for Parashas '.$parashah.' '.$shiurim['date'][0]);
  for ($i=0; $i < sizeof($shiurim['dir']); $i++){
	  
	  if ($shiurim['dir'][$i] != $currentSeries){
	  $currentSeries = $shiurim['dir'][$i];
	  printNewHeadline('Classes for Parashas '.$parashah.' '.$shiurim['date'][$i]);
  }

printShiur($shiurim['title'][$i], $shiurim['filename'][$i], $shiurim['description'][$i], $shiurim['dir'][$i]);
}
	
	
}

?>
