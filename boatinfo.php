


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
					<form name="form1" method="post" action="">
					  <label for="boatname"></label>
					  <table width="100%" border="0" cellspacing="2" cellpadding="2">
				        <tr>
				          <td width="17%">Bootsname</td>
				          <td width="17%"><input type="text" name="boatname" id="boatname"></td>
				          <td width="17%">Typ</td>
				          <td width="17%"><input type="text" name="boatname9" id="boatname9"></td>
				          <td width="17%">Baujahr</td>
				          <td width="17%"><input type="text" name="boatname17" id="boatname17"></td>
			            </tr>
				        <tr>
				          <td width="17%">Registernr.</td>
				          <td width="17%"><input type="text" name="boatname2" id="boatname2"></td>
				          <td width="17%">Konstrukteur</td>
				          <td width="17%"><input type="text" name="boatname10" id="boatname10"></td>
				          <td width="17%">Motor</td>
				          <td width="17%"><input type="text" name="boatname18" id="boatname18"></td>
			            </tr>
				        <tr>
				          <td width="17%">Segelzeichen</td>
				          <td width="17%"><input type="text" name="boatname3" id="boatname3"></td>
				          <td width="17%">Länge</td>
				          <td width="17%"><input type="text" name="boatname11" id="boatname11"></td>
				          <td width="17%">Tankgröße</td>
				          <td width="17%"><input type="text" name="boatname19" id="boatname19"></td>
			            </tr>
				        <tr>
				          <td width="17%">Heimathafen</td>
				          <td width="17%"><input type="text" name="boatname4" id="boatname4"></td>
				          <td width="17%">Breite</td>
				          <td width="17%"><input type="text" name="boatname12" id="boatname12"></td>
				          <td width="17%">Wassertankgröße</td>
				          <td width="17%"><input type="text" name="boatname20" id="boatname20"></td>
			            </tr>
				        <tr>
				          <td width="17%">Yachtclub</td>
				          <td width="17%"><input type="text" name="boatname5" id="boatname5"></td>
				          <td width="17%">Tiefgang</td>
				          <td width="17%"><input type="text" name="boatname13" id="boatname13"></td>
				          <td width="17%">Abwassertankgröße</td>
				          <td width="17%"><input type="text" name="boatname21" id="boatname21"></td>
			            </tr>
				        <tr>
				          <td width="17%">Eigner</td>
				          <td width="17%"><input type="text" name="boatname6" id="boatname6"></td>
				          <td width="17%">Masthöhe</td>
				          <td width="17%"><input type="text" name="boatname14" id="boatname14"></td>
				          <td width="17%">Großsegelgröße</td>
				          <td width="17%"><input type="text" name="boatname22" id="boatname22"></td>
			            </tr>
				        <tr>
				          <td width="17%">Versicherung</td>
				          <td width="17%"><input type="text" name="boatname7" id="boatname7"></td>
				          <td width="17%">Verdrängung</td>
				          <td width="17%"><input type="text" name="boatname15" id="boatname15"></td>
				          <td width="17%">Genaugröße</td>
				          <td width="17%"><input type="text" name="boatname23" id="boatname23"></td>
			            </tr>
				        <tr>
				          <td width="17%">Rufzeichen</td>
				          <td width="17%"><input type="text" name="boatname8" id="boatname8"></td>
				          <td width="17%">Rig-Art</td>
				          <td width="17%"><input type="text" name="boatname16" id="boatname16"></td>
				          <td width="17%">Spigröße</td>
				          <td width="17%"><input type="text" name="boatname24" id="boatname24"></td>
			            </tr>
			          </table>
				  
					<br /><br />
					<table width="100%" border="0" cellspacing="2" cellpadding="2">
					  <tr>
					    <td width="28%">Bootsname</td>
					    <td width="12%">Bootstyp</td>
					    <td width="28%">Konstrukteur</td>
					    <td width="12%">Länge</td>
					    <td width="20%">Inhaber</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
					    <td colspan="3"><input type="submit" name="delete" id="delete" value="Löschen">
				        <input type="submit" name="save" id="save" value="Speichern">
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
