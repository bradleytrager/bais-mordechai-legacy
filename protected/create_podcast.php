<?php

session_start();
$_SESSION['chumash'] = $_POST['chumash'];
$_SESSION['parashah'] = $_POST['parashah'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online MP3 Audio Torah Shiurim by Marty Goodman: Bais-Mordechai.com </title>
<meta name="description" content="Hundreds of free online mp3 audio Torah classes given by Marty Goodman as featured on Chabad.org." />
<?
require '../head.php';

?></head>

<body>
<div class="container_24 ">
  <?
require '../header.php';

?>
<? require '../top_menu.php';?>
<div class="grid_24 content">
<? require '../side_bar.php';?>
<div class="grid_20 alpha omega">
  <div class="grid_1"><p></p></div>
  <div class="grid_16 prefix_1 suffix_1 padding_1 down_1 up_1 boxed text">
 

<?php 

$header = '<?xml version="1.0" encoding="UTF-8"?>
<rss xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">';
	$channel = '
    <channel>
        <title>Torah Classes</title>
        <link>http://bais-mordechai.com/</link>
        <atom:link href="http://bais-mordechai.com/bais-mordechai_rss.xml" rel="self" type="application/rss+xml" />
        <language>en-us</language>
        <copyright>© 2012 Marty Goodman</copyright>
        <itunes:subtitle>Torah Classes</itunes:subtitle>
        <itunes:author>Marty Goodman</itunes:author>
        <itunes:summary>Torah classes covering the weekly Torah Portion in depth as well as classes on various topics in Judaism such as Davening, The Book of Psalms, and the laws concerning blessings on food and drink. </itunes:summary>
        <itunes:category text="Education">
        <itunes:category text="Higher Education"/>
        </itunes:category>
        <description>Torah classes covering the weekly Torah Portion in depth 
        as well as classes on various topics in Judaism such as Davening, The Book of Psalms,
        and the laws concerning blessings on food and drink.</description>
        <itunes:owner>
            <itunes:name>Marty Goodman</itunes:name>
            <itunes:email>Marty@bais-mordechai.com</itunes:email>
        </itunes:owner>
        <itunes:image href="http://bais-mordechai.com/images/Marty_Goodman_Podcast.jpg"/>
        <itunes:explicit>no</itunes:explicit>';
		$footer = '</channel>
	</rss>';
	  
	  require '../mysql.php';
	   
	$shiur = stripslashes($_POST['shiur']);
	$parashah = stripslashes($_POST['parashah']);
	$sql="SELECT title, description, filename, dir
	FROM descriptions 
	WHERE parashah='".mysql_real_escape_string($parashah)."' ORDER BY title DESC";
	$result = mysql_query($sql,$con);
	$file = fopen("../bais-mordechai_rss.xml","w");//clear contents
	fclose($file);
	$file = fopen("../bais-mordechai_rss.xml","a");
	fwrite($file,$header.$channel);  
	
			while ($result != null && $row = mysql_fetch_array($result))
  {
  $title = $row['title'];
  $filename = $row['filename'];
  $dir = $row['dir'];
  $description  = $row['description'];
  $path = $dir.$filename;
  //echo $path;
  $length = ceil(filesize("../".$path) * 44 * 4/1000/1000);//44s * 4 /MB
  $time =  gmdate('i:s', $length);
  $minutes = floor($length/60);
  $seconds = gmdate('s',fmod($length,60));
  $date = date('r');
  echo  $title.'<br/>';
  //echo $filename." = ".$length." seconds"."=".$time." <br/>";
  $filename = str_replace(" ", "%20", $row['filename']);
  
  // echo $row['title'].'<br/>';
//   echo $row['description'].'<br/>';
//   echo $row['filename'].'<br/>';
 
  
	
	
    $item = ' <item>
            <title>'.$title.'</title>
            <itunes:author>Marty Goodman</itunes:author>
            <itunes:subtitle>'.$description.'</itunes:subtitle>
            <itunes:summary>'.$description.'</itunes:summary>
            <enclosure url="http://bais-mordechai.com/mp3/'.$filename.'"
            length="'.$length.'" type="audio/x-m4a"/>
            <guid>http://bais-mordechai.com/mp3/'.$filename.'</guid>
            <pubDate>'.$date.'</pubDate>
            <itunes:duration>'.$minutes.':'.$seconds.'</itunes:duration>
            <itunes:keywords>Torah, Shiurim, Torah Classes, Parashah, Chumash</itunes:keywords>         
        </item>';
	
	
	
	$podcast_xml = $header.$channel.$item.$footer;   
            fwrite($file, $item);  
sleep(2);			
    }	
 fwrite($file,$footer);	

	mysql_close($con);
echo "Podcast for parashas ".$parashah." created";


//$result = id3_remove_tag( "../podcasts/40 - 40-vayishlach.mp3", ID3_V1_0 );
if ($result === true) {
    echo "Tag succesfully removed\n";
}

	 ?>
    
 <div class="grid_1"><p></p></div>
 
</div>
</div>
	

</div></div>

</body>
</html>
