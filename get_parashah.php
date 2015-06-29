<?php
  //get current parasha from chabad.org
  function get_parashah(){
	  $url  ="http://beta.chabad.org";
 
  $raw = file_get_contents($url);
  $start = strpos($raw,'Torah Reading:') + strlen('Torah Reading:');
 
  $end = strpos($raw,'</a>',$start);
  $length = $end - $start;
  $parasha = substr($raw, $start, $length);
  $parasha = trim($parasha);
  echo $parasha;
  }
  ?>