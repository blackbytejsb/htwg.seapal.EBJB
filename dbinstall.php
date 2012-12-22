<?php

	/*
	 * After activating MySQL on XAMPP:
	 * 
	 * - open "localhost" on your browser
	 * - select language
	 * - go to PHPMyAdmin on the left
	 * - Create database called "seapal"
	 * - open "dbinstall.php" on your browser
	 * 
	 */


    $con = mysql_connect("localhost","root",""); 
    
    if (!$con)
	{
		die('Could not connect: ' . mysql_error()); 
	}
	
	
	
	// Create table 
	mysql_select_db("seapal", $con); 
	
	$sql = "CREATE TABLE IF NOT EXISTS Boat 			(	Boatname varchar(255), 
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
															
															
									
			CREATE TABLE IF NOT EXISTS Trip				(	id INT NOT NULL AUTO_INCREMENT,
															Triptitle varchar(255), 
															FromLocation varchar(100), 
															ToLocation varchar(100), 
															Skipper varchar(30), 
															StartDate DATETIME, 
															EndDate DATETIME, 
															Duration int,
															Motor int,
															Tankfilled BOOL,
															Notes TEXT,
															Picture blob,
															PRIMARY KEY(id)
															);
									
			
									
			CREATE TABLE IF NOT EXISTS Waypoint 		(	id int NOT NULL AUTO_INCREMENT,
															PRIMARY KEY(id),
															Name varchar(255), 
															PositionEdegree int,
															PositionEmin int,
															PositionEsek int,
															PositionNdegree int,
															PositionNmin int,
															PositionNsek int,
															BTM double, 
															DTM double, 
															COG double, 
															SOG double, 
															Date DATETIME, 
															Tripto int,
															Maneuver int,
															Mainsail int,
															Grandsail int
															);
									
			CREATE TABLE IF NOT EXISTS WaypointOfTrip	(	WaypointID int,
															TripID int);
			
			ALTER TABLE Trip AUTO_INCREMENT=10000;
			ALTER TABLE Waypoint AUTO_INCREMENT=10000;";
	

	$queries = explode(";", $sql);
	
	// Execute query
	
	foreach ($queries as $query) {
			
			if (strlen($query) == 0) {
				continue;
			}
			
			$result = mysql_query($query,$con);
			
			if ($result == true) {
				echo "Table installed!<br />";
			} else {
		
				echo "Install Table Failed! Error: ".mysql_error()."<br />";	
		
			}
	}
	
	
	
	
	
	
	
?>

