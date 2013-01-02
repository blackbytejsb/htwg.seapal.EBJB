

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
				<h2 class="title"><a name="welcome">Entry Info</a></h2>
				<div class="entry">
					<form name="form1" method="post" action="">
					  <label for="boatname"></label>
					  <table width="100%" border="0" cellspacing="2" cellpadding="2">
				        <tr>
				          <td width="10%">Name</td>
				          <td colspan="7"><input name="name" type="text" id="name" size="50"></td>
			            </tr>
				        <tr>
				          <td width="10%">Position</td>
				          <td width="18%"><input name="latitude" type="text" id="latitude" size="6">
			                &quot;N</td>
				          <td colspan="2"><label for="textarea">
				            <input name="longitude" type="text" id="longitude" size="6">
  &quot;E</label></td>
				          <td width="5%">COG</td>
				          <td width="12%"><input name="cog" type="text" id="cog" value="0.0°" size="12"></td>
				          <td width="5%">SOG</td>
				          <td width="27%"><input name="sog" type="text" id="sog" value="0.0 kn" size="12"> 
				            at xx.xx.xx</td>
			            </tr>
				        <tr>
				          <td width="10%">BTM</td>
				          <td width="18%"><input name="btm" type="text" id="btm" value="0°" size="10"></td>
				          <td width="4%">DTM</td>
				          <td width="19%"><input name="dtm" type="text" id="dtm" value="0.0000 nm" size="12"></td>
				          <td colspan="4">Fahrt nach 
				            <label for="select"></label>
				            <select name="tripto" id="tripto">
		                  </select></td>
			            </tr>
			          </table>
				  
					  <table width="100%" border="0" cellspacing="0" cellpadding="0">
					    <tr>
					      <td align="center">Manöver
					          <select name="maveuver" id="maveuver">
			              </select></td>
					      <td align="center">Vorsegel
					        <select name="foresail" id="foresail">
			              </select></td>
					      <td align="center">Großsegel
					        <select name="grandsail" id="grandsail">
			              </select></td>
				        </tr>
				      </table>
					  <br>
					  <table width="100%" border="0" cellspacing="0" cellpadding="10">
					    <tr>
					      <td width="25%">Notes</td>
					      <td width="55%" rowspan="2"><div id="map_canvas" style="width:100%; height:400px"></div></td>
					      <td width="20%"> Photos</td>
				        </tr>
					    <tr>
					      <td width="25%" valign="top"><textarea name="notes" cols="30" rows="12" id="notes"></textarea></td>
					      <td width="20%" align="center" valign="top"><img name="picture" src="" width="180" height="200" alt="No Picture"></td>
				        </tr>
				      </table>
					  <br>
					  <br>
					  <table width="100%" border="0" cellspacing="2" cellpadding="2">
					  <tr>
					    <td width="68%"><input type="submit" name="save2" id="save2" value="Abbrechen"></td>
					    <td width="32%" align="right"><input type="submit" name="save" id="save" value="Speichern"></td>
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
