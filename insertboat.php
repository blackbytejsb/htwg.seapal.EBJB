<?php
	$con = mysql_connect("localhost","root","");

	if (!$con)
  	{
  		die('Could not connect: ' . mysql_error());
  	}

  	mysql_select_db("seapal", $con);

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

	if (!mysql_query($sql,$con))
  	{
  		die('Error: ' . mysql_error());
  	};
  
	echo "1 record added";
	mysql_close($con);
?>