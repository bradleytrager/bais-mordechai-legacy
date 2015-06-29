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
			$current_parashah = 'V\'Zot Haberacha';
			}
					
		
		
		return $current_parashah;
		
		}
	}
}
?>



 
<div class="grid_24 top_right_header">
בס"ד</div>



<div class="grid_24 header">
<div class="grid_19 prefix_1  alpha " >


<br/><br/>
<table id="Table_01" width="750" height="136" border="0" cellpadding="0" cellspacing="0" style="margin:2px;">
<tr><td colspan="7">
<a href="/"><img src="http://bais-mordechai.com/images/images/BaisMordechaiHeadlineWithMenu_01.png" width="750" height="98" 
alt="BaisMordechai.com"></a>
</td></tr><tr>
<td style="text-align: center;">
<a href="http://bais-mordechai.com/" style="color:white; text-decoration:none;">
HOME</a></td>
<td style="text-align: center;">
<a href="http://bais-mordechai.com/shiurlist.php?pname=bereishit

<?php//echo get_parashah();?>

&class=parashah" style="color:white; text-decoration:none;">
CURRENT PARASHAH</a></td>
<td style="text-align: center;">
<a href="http://bais-mordechai.com/shiurlist.php?class=new" style="color:white; text-decoration:none;">
WHAT'S NEW</a></td>
<td style="text-align: center;">
<a href="http://bais-mordechai.com/AskMarty.php" style="color:white; text-decoration:none;">
ASK MARTY</a></td>
<td style="text-align: center;">
<a href="/MailList.php" style="color:white; text-decoration:none;">
MAILING LIST</a></td>
<td style="text-align: center;">
<a href="/about.php" style="color:white; text-decoration:none;">
ABOUT</a></td></tr>
</table>
</div>

<div class="grid_4  omega">
<br />
<img src="http://bais-mordechai.com/images/martygoodman1.png" align="right" alt="Marty Goodman photo" />
</div>  
</div><!--end header -->


