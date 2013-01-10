
<?php include("header.php"); ?>
<script type="text/javascript" src="forms.js"></script>


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
				
				
				<span id="boatname_help"></span> 

				<div class="entry">
					<form id="send-message-form">
					  <label for="boatname"></label>
					  <table width="100%" border="0" cellspacing="2" cellpadding="2">
				        <tr>
				          <td width="17%">Bootsname</td>
				          <td width="17%"><input type="text" name="Boatname" id="Boatname" onblur="isNameOk(this, document.getElementById('boatname_help'))">
				          			     
				          </td>
				          <td width="17%">Typ</td>
				          <td width="17%"><input type="text" name="Boattype" id="Boattype"></td>
				          <td width="17%">Baujahr</td>
				          <td width="17%"><input type="text" name="Manufactureyear" id="Manufactureyear" onblur="isYearOk(this, document.getElementById('boatname_help'))"></td>
			            </tr>
				        <tr>
				          <td width="17%">Registernr.</td>
				          <td width="17%"><input type="text" name="registernr" id="Registernr" onblur="isTheFieldEmpty(this, document.getElementById('boatname_help'))"></td>
				          <td width="17%">Konstrukteur</td>
				          <td width="17%"><input type="text" name="manufacturer" id="Manufacturer" onblur="isNameOk(this, document.getElementById('boatname_help'))"></td>
				          <td width="17%">Motor</td>
				          <td width="17%"><input type="text" name="motortype" id="Motortype" onblur="isNameOk(this, document.getElementById('boatname_help'))"></td>
			            </tr>
				        <tr>
				          <td width="17%">Segelzeichen</td>
				          <td width="17%"><input type="text" name="sailemblem" id="Sailemblem" onblur="isNameOk(this, document.getElementById('boatname_help'))"></td>
				          <td width="17%">Länge (m)</td>
				          <td width="17%"><input type="text" name="length" id="Length" onblur="isFloatOk(this, document.getElementById('boatname_help'))"></td>
				          <td width="17%">Tankgröße (l)</td>
				          <td width="17%"><input type="text" name="tanksize" id="Tanksize" onblur="isFloatOk(this, document.getElementById('boatname_help'))"></td>
			            </tr>
				        <tr>
				          <td width="17%">Heimathafen</td>
				          <td width="17%"><input type="text" name="homeport" id="Homeport" onblur="isNameOk(this, document.getElementById('boatname_help'))"></td>
				          <td width="17%">Breite (m)</td>
				          <td width="17%"><input type="text" name="width" id="Width" onblur="isFloatOk(this, document.getElementById('boatname_help'))"></td>
				          <td width="17%">Wassertankgröße (l)</td>
				          <td width="17%"><input type="text" name="watertanksize" id="Watertanksize" onblur="isFloatOk(this, document.getElementById('boatname_help'))"></td>
			            </tr>
				        <tr>
				          <td width="17%">Yachtclub</td>
				          <td width="17%"><input type="text" name="yachtclub" id="Yachtclub" onblur="isNameOkOrEmpty(this, document.getElementById('boatname_help'))"></td>
				          <td width="17%">Tiefgang</td>
				          <td width="17%"><input type="text" name="draft" id="draft" onblur="isFloatOk(this, document.getElementById('boatname_help'))"></td>
				          <td width="17%">Abwassertankgröße (l)</td>
				          <td width="17%"><input type="text" name="effluenttanksize" id="Effluenttanksize" onblur="isFloatOk(this, document.getElementById('boatname_help'))"></td>
			            </tr>
				        <tr>
				          <td width="17%">Eigner</td>
				          <td width="17%"><input type="text" name="owner" id="Owner" onblur="isNameOk(this, document.getElementById('boatname_help'))"></td>
				          <td width="17%">Masthöhe (m)</td>
				          <td width="17%"><input type="text" name="mastheight" id="Mastheight" onblur="isFloatOk(this, document.getElementById('boatname_help'))"></td>
				          <td width="17%">Großsegelgröße (m)</td>
				          <td width="17%"><input type="text" name="mainsailsize" id="Mainsailsize" onblur="isFloatOk(this, document.getElementById('boatname_help'))"></td>
			            </tr>
				        <tr>
				          <td width="17%">Versicherung</td>
				          <td width="17%"><input type="text" name="insurance" id="Insurance" onblur="isNameOkOrEmpty(this, document.getElementById('boatname_help'))"></td>
				          <td width="17%">Verdrängung</td>
				          <td width="17%"><input type="text" name="repression" id="Repression" onblur="isFloatOk(this, document.getElementById('boatname_help'))"></td>
				          <td width="17%">Genuagröße (m)</td>
				          <td width="17%"><input type="text" name="genuasize" id="Genuasize" onblur="isFloatOk(this, document.getElementById('boatname_help'))"></td>
			            </tr>
				        <tr>
				          <td width="17%">Rufzeichen</td>
				          <td width="17%"><input type="text" name="callsign" id="Callsign" onblur="isNameOkOrEmpty(this, document.getElementById('boatname_help'))"></td>
				          <td width="17%">Rig-Art</td>
				          <td width="17%"><input type="text" name="rigtype" id="Rigtype" onblur="isNameOkOrEmpty(this, document.getElementById('boatname_help'))"></td>
				          <td width="17%">Spigröße (m)</td>
				          <td width="17%"><input type="text" name="spisize" id="Spisize" onblur="isFloatOk(this, document.getElementById('boatname_help'))"></td>
			            </tr>
			          </table>
				  
					<br /><br />
					<table width="100%" border="0" cellspacing="2" cellpadding="2" id="datatable">
					  <tr>
					    <td width="28%">Bootsname</td>
					    <td width="12%">Bootstyp</td>
					    <td width="28%">Konstrukteur</td>
					    <td width="12%">Länge (m)</td>
					    <td width="20%">Inhaber</td>
				      </tr>
				      <?php
							$con = mysql_connect("localhost","root","");
							mysql_select_db("seapal", $con);

							$result = mysql_query("SELECT * FROM Boat");

							while($row = mysql_fetch_array($result))
							{
								echo '<tr name="'.$row['Registernr'].'" >';
							  	echo "<td>" . $row['Boatname'] . "</td>
									  <td>" . $row['Type'] . "</td>
									  <td>" . $row['Manufacturer'] . "</td>
									  <td>" . $row['Length'] . " m </td>
									  <td>" . $row['Owner'] . "</td>";
							  	echo "</tr>";
							}
					  ?>
					  
					  <table width="100%" border="0" cellspacing="2" cellpadding="2">

					  <tr>
					    <td colspan="3"><input type="submit" name="delete" id="delete" value="Löschen">
				        <!-- <input type="submit" name="save" id="save" value="Speichern"> <!-- Removed Send button -->
				        <input type="submit" name="latest" id="latest" value="Neuester"></td>
					    <td colspan="2"><input type="submit" name="previous" id="previous" value="Vorheriger">
				        <input type="submit" name="next" id="next" value="Nächster"></td>
				      </tr>
			      </table>
			      </form>
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

<?php include("footer.php"); ?>
