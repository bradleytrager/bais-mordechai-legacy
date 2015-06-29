<?php 
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
// http://bais-mordechai.com/classes.php?ultime=2&orderby=ultime%20desc
include_once 'mysqli.php';
$baseQuery =  "SELECT * FROM descriptions ";
$queryString = $baseQuery;

if($_GET){
	$queryString .= " where ";
}

$filters = $_GET['filters'];

if($filters){
	$index = 0;
	foreach ($filters as $filter => $value) {
		if($index > 0){
			$queryString .= ' and ';
		}
		$queryString .= '`'.mysqli_real_escape_string($con, $filter).'` = "'.mysqli_real_escape_string($con, $value).'"';
		$index++;
	}
}
if(isset($_GET['ultime'])){
	if($filters){
		$queryString .= ' and ';
	}
	$ultime =  $_GET['ultime'];
	$queryString .= ' UNIX_TIMESTAMP(ultime) > (UNIX_TIMESTAMP() - 60*60*24*7*'.$ultime.')';
}

$orderbys = $_GET['orderby'];

if(isset($orderbys)){
	$index = 0;
	foreach ($orderbys as $field) {
		if($index > 0){
			$queryString .= ' and ';
		}
		$queryString .= '`'.mysqli_real_escape_string($con, $field).'`';
		$index++;
	}
	$orderby = $_GET['orderby'];
	$queryString .= ' order by '.mysqli_real_escape_string($con, $orderby);
}

//echo $queryString;
$result = mysqli_query($con, $queryString);

$classes = array();
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	
	$classes[] = $row;
}

mysqli_close($con);

echo json_encode($classes);
?>