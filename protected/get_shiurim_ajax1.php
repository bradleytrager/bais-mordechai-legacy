
        <?php 
		$parashahName = stripslashes($_POST['parashah']);
		require '../mysql.php';
		$sql="SELECT filename, title, description, dir
				FROM descriptions 
				WHERE parashah='".mysql_real_escape_string($parashahName)."' 
				ORDER BY `title` ASC";
		$result = mysql_query($sql);
		$data = array();
		while($row = mysql_fetch_array($result))
  		{
  			
  			$data[]=$row;
  			
  		}
		                          //fetch result    
  		echo json_encode($data);
	?>