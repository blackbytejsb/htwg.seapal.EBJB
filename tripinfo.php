


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
				<h2 class="title"><a name="welcome">Trip Info</a></h2>
				<div class="entry">
					<form name="form1" method="post" action="">
					  <label for="boatname"></label>
					  <table width="100%" border="0" cellspacing="2" cellpadding="2">
				        <tr>
				          <td width="16%">Trip Title</td>
				          <td colspan="7"><input name="boatname" type="text" id="boatname" size="50"></td>
			            </tr>
				        <tr>
				          <td width="16%">Von</td>
				          <td width="18%"><input type="text" name="boatname2" id="boatname2"></td>
				          <td width="5%">Crew</td>
				          <td width="25%" rowspan="3"><label for="textarea"></label>
			              <textarea name="textarea" cols="18" rows="4" id="textarea"></textarea></td>
				          <td width="16%">Start</td>
				          <td width="20%"><input name="boatname5" type="text" id="boatname5"></td>
				          <td width="20%">&nbsp;</td>
				          <td width="20%">&nbsp;</td>
			            </tr>
				        <tr>
				          <td width="16%">Nach</td>
				          <td width="18%"><input type="text" name="boatname3" id="boatname3"></td>
				          <td width="5%">&nbsp;</td>
				          <td width="16%">Ende</td>
				          <td width="20%"><input type="text" name="boatname6" id="boatname6"></td>
				          <td width="20%">Motor(min)</td>
				          <td width="20%"><input name="boatname19" type="text" id="boatname19" size="10"></td>
			            </tr>
				        <tr>
				          <td width="16%">Skipper</td>
				          <td width="18%"><input type="text" name="boatname4" id="boatname4"></td>
				          <td width="5%">&nbsp;</td>
				          <td width="16%">Dauer</td>
				          <td width="20%"><input type="text" name="boatname7" id="boatname7"></td>
				          <td width="20%">Tank gefüllt</td>
				          <td width="20%"><input type="checkbox" name="checkbox" id="checkbox">
			              <label for="checkbox"></label></td>
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
					    <td width="28%">&nbsp;</td>
					    <td width="12%">&nbsp;</td>
					    <td width="28%">&nbsp;</td>
					    <td width="12%">&nbsp;</td>
					    <td width="20%">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
					    <td colspan="3"><input type="submit" name="save" id="save" value="Neuer Eintrag">
					      <input type="submit" name="delete" id="delete" value="Löschen">
				        <input type="submit" name="latest" id="latest" value="Filter"></td>
					    <td colspan="2"><input type="submit" name="previous2" id="previous2" value="Erster">
					      <input type="submit" name="previous3" id="previous3" value="Letzter">
<input type="submit" name="previous" id="previous" value="Vorheriger">
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
