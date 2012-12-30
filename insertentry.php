

<?php
	$con = mysql_connect("localhost","root","");

	if (!$con)
  	{
  		die('Could not connect: ' . mysql_error());
  	}

  	mysql_select_db("seapal", $con);

  	$sql = "INSERT INTO Boat
			VALUES
			( 0,
			 '$_POST[name]',
			 '$_POST[latitude]',
			 '$_POST[longitude]',
			 '$_POST[btm]',
			 '$_POST[dtm]',
			 '$_POST[cog]',
			 '$_POST[sog]',
			 '$_POST[date]',
			 '$_POST[tripto]',
			 '$_POST[maneuver]',
			 '$_POST[foresail]',
			 '$_POST[grandsail]',
			 '$_POST[notes]'
			 )";
?>


<?php include("header.php"); ?>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a name="top"><img src="./images/Icon-Small-50.png" alt="Icon-Small-50" width="50" height="50">SeaPal </a></h1>
		</div>
		<div id="menu">
			<ul>
<li class="current_page_item"><a href="index.php">Homepage</a></li><li><a href="userguide.php">User Guide</a></li><li><a href="screenshots.php">Screenshots</a></li><li><a href="about.php">About</a></li><li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</div>
	<div id="banner" class="container">
		<div class="image-style">
			<img src="./images/SeaPal-Screen-Horiz01.jpg" width="970" height="320" alt="">
		</div>
	</div>
</div>

<div id="wrapper">
	<div id="page" class="container">
		<div id="content-wide">
			<div class="post">
				<h2 class="title"><a name="welcome">Boat Info</a></h2>
				<div class="entry">
					<?php
					
						if (!mysql_query($sql,$con))
					  	{
					  		echo 'Error: ' . mysql_error() . ". ";
					  	}else{
					  		echo "Trip hinzugefügt.";
					  	}
						
						echo " <a href=\"tripinfo.php\">Weiter</a>";
					?>
				</div>
			</div>
		</div>
		<!-- end #content --><!-- end #sidebar -->
		<div style="clear: both;">
			&nbsp;
		</div>
	</div>
	<!-- end #page -->
</div>

<?php include("footer.php"); 
	
	mysql_close($con);

?>
