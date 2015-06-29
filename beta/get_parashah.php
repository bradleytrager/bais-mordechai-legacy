<?php

//function uses fullkriyah.csv to extract current parashah to display
function get_parashah(){
	 
	$file = fopen("/kunden/homepages/38/d90108673/htdocs/bais-mordechai/new.csv", "r") or exit("Unable to open file!");
	
	$hour = 60*60;
	$day = $hour*24;
	$week = $day*7;
	$today = time() - 12*$hour;
	
	while(!feof($file)) {
		$array = fgetcsv($file);
		$date = $array[0];
		if (strtotime($date) > $today) {//finds the first occurance of a future date
		$current_parashah = $array[1];
		$current_parashah = trim($current_parashah);
		
		//Only display bereishit one week before
		if (   strcmp($current_parashah, 'Bereishit') == 0
			&& strtotime($date) > ($today + $week)
			){
			$current_parashah = 'Vezot Hab\'rachah';
			}
					
		
		
		return $current_parashah;
		
		}
	}
}
?>