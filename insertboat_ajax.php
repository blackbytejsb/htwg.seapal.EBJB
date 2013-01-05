

<?php
	$con = mysql_connect("localhost","root","");

	if (!$con)
  	{
  		die('Could not connect: ' . mysql_error());
  	}
	
	

  	mysql_select_db("seapal", $con);



	$action = $_POST['action'];
	$result;

	/*
	$values = "";
	
	foreach ($result as $value)
	{
		$values = $values+$value+",";
	}
	 *
	 */
	
	switch($action) {
		case('update'): 
			$select = mysql_query("SELECT * FROM Boat WHERE Registernr = ".$_POST['key']);

			while($row = mysql_fetch_array($select))
			{
				$result = "<tr>"."<td>" . $row['Boatname'] . "</td>
						  <td>" . $row['Type'] . "</td>
						  <td>" . $row['Manufacturer'] . "</td>
						  <td>" . $row['Length'] . " m </td>
						  <td>" . $row['Owner'] . "</td>"."</tr>";
			}
		break;
		case('getid'): 
			$select = mysql_query("SELECT * FROM Boat WHERE Registernr = ".$_POST['key']);

			while($row = mysql_fetch_array($select))
			{
				$result = $row;
			}
		break;
		case('send'):
			$sql = "INSERT INTO Boat
			VALUES
			('$_POST[boatname]',
			 '$_POST[registernr]',
			 '$_POST[sailemblem]',
			 '$_POST[homeport]',
			 '$_POST[yachtclub]',
			 '$_POST[owner]',
			 '$_POST[insurance]',
			 '$_POST[callsign]',
			 '$_POST[boattype]',
			 '$_POST[manufacturer]',
			 '$_POST[length]',
			 '$_POST[width]',
			 '$_POST[draft]',
			 '$_POST[mastheight]',
			 '$_POST[repression]',
			 '$_POST[rigtype]',
			 '$_POST[manufactureyear]',
			 '$_POST[motortype]',
			 '$_POST[tanksize]',
			 '$_POST[watertanksize]',
			 '$_POST[effluenttanksize]',
			 '$_POST[mainsailsize]',
			 '$_POST[genuasize]',
			 '$_POST[spisize]'
			)";
			
			$result = "<tr>"."<td>" . $_POST[boatname] . "</td>
						  <td>" . $_POST[boattype] . "</td>
						  <td>" . $_POST[manufacturer] . "</td>
						  <td>" . $_POST[length] . " m </td>
						  <td>" . $_POST[owner] . "</td>"."</tr>";
		break;
	}
  	
	mysql_query($sql,$con);
	mysql_close($con);
	
	echo json_encode($result);
?>



