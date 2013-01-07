<%@ page import="java.io.*,java.util.*,java.net.*,java.sql.*" %>

<%

	String boatname=request.getParameter("Boatname");
	String registernr=request.getParameter("Registernr");
	String sailemblem=request.getParameter("Sailemblem");
	String homeport=request.getParameter("Homeport");
	String yachtclub=request.getParameter("Yachtclub");
	String owner=request.getParameter("Owner");
	String insurance=request.getParameter("Insurance");
	String callsign=request.getParameter("Callsign");
	String boattype=request.getParameter("Boattype");
	String manufacturer=request.getParameter("Manufacturer");
	String length=request.getParameter("Length");
	String width=request.getParameter("Width");
	String draft=request.getParameter("Draft");
	String mastheight=request.getParameter("Mastheight");
	String repression=request.getParameter("Repression");
	String rigtype=request.getParameter("Rigtype");
	String manufactureyear=request.getParameter("Manufactureyear");
	String motortype=request.getParameter("Motortype");
	String tanksize=request.getParameter("Tanksize");
	String watertanksize=request.getParameter("Watertanksize");
	String effluenttanksize=request.getParameter("Effluenttanksize");
	String mainsailsize=request.getParameter("Mainsailsize");
	String genuasize=request.getParameter("Genuasize");
	String spisize=request.getParameter("Spisize");


  	Connection con = null;
	String url = "jdbc:mysql://localhost/";
	String db = "seapal";
	String driver = "com.mysql.jdbc.Driver";
	String userName ="root";
	String password="";

	int sumcount=0;
	Statement st;
	try{
		Class.forName(driver).newInstance();
		con = DriverManager.getConnection(url+db,userName,password);
		String query = "INSERT INTO Boat (Boatname,Registernr,Sailemblem,Homeport,Yachtclub,Owner,Insurance,Callsign,Type,Manufacturer,Length,Width,Draft,Mastheight,Repression,Rigtype,Manufactureyear,Motortype,Tanksize,Watertanksize,Effluenttanksize,Mainsailsize,Genuasize,Spisize)"+
		"VALUES ("+ boatname +","+ registernr +","+ sailemblem +","+ homeport +","+ yachtclub +","+ owner +","+ insurance +","+ callsign +","+ boattype +","+ manufacturer +","+ length +","+ width +","+ draft +","+ mastheight +","+ repression +","+ rigtype +","+ manufactureyear +","+ motortype +","+ tanksize +","+ watertanksize +","+ effluenttanksize +","+ mainsailsize +","+ genuasize +","+ spisize +");";
		st = con.createStatement();
		
		ResultSet rs;
		int i = st.executeUpdate(query);
 			 	
 		out.write("W000t is " + i); 
		
		System.out.print("<tr name='"+registernr+"'><td>" + boatname + "</td>"+
						  "<td>" + boattype + "</td>"+
						  "<td>" + manufacturer + "</td>"+
						  "<td>" + length + " m </td>"+
						  "<td>" + owner + "</td></tr>");
    	System.out.flush();

	}
	catch(SQLException e){
		e.printStackTrace();
	 	out.write("Error!!!!!!" + e); 
		System.out.print(e);
	}
%>

<%--
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
				$result = "<tr name='".$_POST['Registernr']."'>"."<td>" . $row['Boatname'] . "</td>
						  <td>" . $row['Type'] . "</td>
						  <td>" . $row['Manufacturer'] . "</td>
						  <td>" . $row['Length'] . " m </td>
						  <td>" . $row['Owner'] . "</td>"."</tr>";
			}
		break;
		case('getid'): 
			$select = mysql_query("SELECT * FROM Boat WHERE Registernr = ".$_POST['rowid']);

			while($row = mysql_fetch_array($select))
			{
				$result = $row;
			}
		break;
		case('send'):
			$sql = "INSERT INTO Boat
			VALUES
			('$_POST[Boatname]',
			 '$_POST[Registernr]',
			 '$_POST[Sailemblem]',
			 '$_POST[Homeport]',
			 '$_POST[Yachtclub]',
			 '$_POST[Owner]',
			 '$_POST[Insurance]',
			 '$_POST[Callsign]',
			 '$_POST[Boattype]',
			 '$_POST[Manufacturer]',
			 '$_POST[Length]',
			 '$_POST[Width]',
			 '$_POST[Draft]',
			 '$_POST[Mastheight]',
			 '$_POST[Repression]',
			 '$_POST[Rigtype]',
			 '$_POST[Manufactureyear]',
			 '$_POST[Motortype]',
			 '$_POST[Tanksize]',
			 '$_POST[Watertanksize]',
			 '$_POST[Effluenttanksize]',
			 '$_POST[Mainsailsize]',
			 '$_POST[Genuasize]',
			 '$_POST[Spisize]'
			)";
			
			$result = "<tr name='".$_POST[Registernr]."'>"."<td>" . $_POST[Boatname] . "</td>
						  <td>" . $_POST[Boattype] . "</td>
						  <td>" . $_POST[Manufacturer] . "</td>
						  <td>" . $_POST[Length] . " m </td>
						  <td>" . $_POST[Owner] . "</td>"."</tr>";
		break;
	}
  	
	mysql_query($sql,$con);
	mysql_close($con);
	
	echo json_encode($result);
?>
--%>


