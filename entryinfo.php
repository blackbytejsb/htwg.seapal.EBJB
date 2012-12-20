


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
				          <td colspan="7"><input name="boatname" type="text" id="boatname" size="50"></td>
			            </tr>
				        <tr>
				          <td width="10%">Position</td>
				          <td width="18%"><input name="boatname2" type="text" id="boatname2" size="6">
				            °
			                <input name="boatname4" type="text" id="boatname4" size="4">
			                '
			                <input name="boatname7" type="text" id="boatname7" size="4">
			                &quot;N</td>
				          <td colspan="2"><label for="textarea">
				            <input name="boatname8" type="text" id="boatname8" size="6">
				            °
  <input name="boatname8" type="text" id="boatname9" size="4">
				            '
  <input name="boatname8" type="text" id="boatname10" size="4">
  &quot;E</label></td>
				          <td width="5%">COG</td>
				          <td width="12%"><input name="boatname5" type="text" id="boatname5" value="0.0°" size="12"></td>
				          <td width="5%">SOG</td>
				          <td width="27%"><input name="boatname10" type="text" id="boatname12" value="0.0 kn" size="12"> 
				            at xx.xx.xx</td>
			            </tr>
				        <tr>
				          <td width="10%">BTM</td>
				          <td width="18%"><input name="boatname3" type="text" id="boatname3" value="0°" size="10"></td>
				          <td width="4%">DTM</td>
				          <td width="19%"><input name="boatname9" type="text" id="boatname11" value="0.0000 nm" size="12"></td>
				          <td colspan="4">Fahrt nach 
				            <label for="select"></label>
				            <select name="select" id="select">
		                  </select></td>
			            </tr>
			          </table>
				  
					  <table width="100%" border="0" cellspacing="0" cellpadding="0">
					    <tr>
					      <td align="center">Manöver
					          <select name="select2" id="select2">
			              </select></td>
					      <td align="center">Vorsegel
					        <select name="select3" id="select3">
			              </select></td>
					      <td align="center">Großsegel
					        <select name="select4" id="select4">
			              </select></td>
				        </tr>
				      </table>
					  <br>
					  <table width="100%" border="0" cellspacing="0" cellpadding="0">
					    <tr>
					      <td width="30%">Notes</td>
					      <td width="40%" rowspan="2">&nbsp;</td>
					      <td width="30%">Photos</td>
				        </tr>
					    <tr>
					      <td width="30%"><textarea name="textarea2" cols="38" rows="12" id="textarea2"></textarea></td>
					      <td width="30%" align="center"><img name="picture" src="" width="180" height="200" alt="No Picture"></td>
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
