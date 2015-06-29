
        <?php 
		$parashahName = stripslashes($_POST['parashah']);
		$con = mysql_connect("50.63.244.174","baismordechai","Chum@shim5");
		if (!$con)
  		{
  		die('Could not connect: ' . mysql_error());
  		}
		mysql_select_db("baismordechai", $con);
		$sql="SELECT filename, title, description, dir
				FROM descriptions 
				WHERE parashah='".mysql_real_escape_string($parashahName)."' 
				ORDER BY `number` ASC, `title` ASC";
					$result = mysql_query($sql);

		$array = mysql_fetch_row($result);                          //fetch result    
  		echo json_encode($array);
	?>