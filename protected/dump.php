<?
// $con = mysql_connect("50.63.244.174","baismordechai","Chum@shim5");
// if (!$con)
//   {
//   die('Could not connect: ' . mysql_error());
//   }
// 
// mysql_select_db("baismordechai", $con);
header('Content-Type: application/json');
$request = @file_get_contents('php://input');

$con = mysql_connect("db439939299.db.1and1.com","dbo439939299","bais770");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db439939299", $con);

$query = mysql_query($request);
if (!$query) {
	echo mysql_errno($con) . ": " . mysql_error($con) . "\n";
}
mysql_close($con);

while ($row = mysql_fetch_assoc($query)){
	$results[] = $row;
}

echo json_encode($results);
?>