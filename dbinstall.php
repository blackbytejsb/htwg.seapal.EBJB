<?php
    $con = mysql_connect("localhost","peter","abc123"); if (!$con)
	{
		die('Could not connect: ' . mysql_error()); 
	}
	
	
	
	// Create table 
	mysql_select_db("my_db", $con); 
	
	$sql = "CREATE TABLE Boat 	(	Boatname varchar(255), 
									Registernr varchar(15),
									PRIMARY KEY(Registernr), 
									Sailemblem varchar(20), 
									Homeport varchar(30), 
									Yachtclub varchar(20), 
									Owner varchar(255), 
									Insurance 
									varchar(100),
									Callsign varchar(50),
									Type varchar(15),
									Constructor varchar(50),
									Length double,
									Width double,
									Draft double,
									Mastheight double,
									Repression double,
									Rigtype varchar(15),
									Manufactureyear int,
									Motortype varchar(50),
									Tanksize double,
									Watertanksize double,
									Effluenttanksize double,
									Mainsailsize double,
									Genuasize double,
									Spisize double
									);
									
			CREATE TABLE Trip	(	TripID int NOT NULL AUTO_INCREMENT,
									PRIMARY KEY(TripID),
									Triptitle varchar(255), 
									From varchar(100), 
									To varchar(100), 
									Skipper varchar(30), 
									Start datetime, 
									End datetime, 
									Duration int,
									Motor int,
									Tankfilled BOOL,
									Notes TEXT,
									Picture blob
									);
									
			CREATE TABLE Waypoint (	WaypointID int NOT NULL AUTO_INCREMENT,
									PRIMARY KEY(WaypointID),
									Name varchar(255), 
									BTM double, 
									DTM double, 
									COG double, 
									SOG double, 
									Date datetime, 
									Tripto int,
									Maneuver int,
									Mainsail int,
									Grandsail int
									);
			";
	
	// Execute query
	mysql_query($sql,$con);
	
	
	
	
	
	
	  mysql_close($con);
?>