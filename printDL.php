<?php
function printHeadline($headline){
	echo '<h3>'.$headline.':</h3><hr/>';
}
function printNewHeadline($headline){
	echo ' </div><!--end grid_16 -->
        <div class="grid_1"><p></p></div>
        <div class="grid_16 prefix_1 suffix_1 padding_1  up_1 boxed text">';
	  printHeadline($headline);
	  
}
function printShiur($title, $filename, $description, $dir){
	echo '<table style="width:100%;"><tr><td style="width:50%;text-decoration:underline;">'.
	 '<a href="'.'http://bais-mordechai.com/shiur.php?shiur='.$title.'">'.$title.'</a>'.
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


function ListByDate($timespan = 1209600){

require 'mysql.php';

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
printHeadline('New classes uploaded on '.date("l F j, Y", $sharedDate));


for ($i=0; $i < sizeof($newShiurim['dir']); $i++){
	if ($newShiurim['date'][$i] != $sharedDate){
	$sharedDate = $newShiurim['date'][$i];

	printNewHeadline('New classes uploaded on '.date("l F j, Y", $sharedDate));


}

printShiur($newShiurim['title'][$i],$newShiurim['filename'][$i], $newShiurim['description'][$i], $newShiurim['dir'][$i]);

		}
	
//echo '<br />';
}
function ListByType($type){
	require 'mysql.php';
	
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
  require 'mysql.php';

	
	$result = mysql_query( "SELECT filename, title, description, dir 
							FROM descriptions 
							WHERE parashah='". mysql_real_escape_string($parashah)."' 
							ORDER BY `dir` DESC, `filename` ASC");
	
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
	
//echo '<br />';
	
}

?>
