<%@ page import="java.io.*,java.util.*,java.net.*,java.sql.*" %>

<%
				      	Connection con = null;
						String url = "jdbc:mysql://localhost:8080/";
						String db = "seapal";
						String driver = "com.mysql.jdbc.Driver";
						String userName ="root";
						String password="";

						int sumcount=0;
						Statement st;
						try{
							Class.forName(driver).newInstance();
							con = DriverManager.getConnection(url+db,userName,password);
							String query = "INSERT INTO Boat (Boatname,Registernr,Sailemblem,Homeport,Yachtclub,Owner,Insurance,Callsign,Boattype,Manufacturer,Length,Width,Draft,Mastheight,Repression,Rigtype,Manufactureyear,Motortype,Tanksize,Watertanksize,Effluenttanksize,Mainsailsize,Genuasize,Spisize) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
							st = con.createStatement();
							ResultSet rs = st.executeQuery(query);
					  %>
					  <%
							while(rs.next()){
					  %>
								<tr name='<%= rs.getString(2) %>'>
								<td><%=rs.getString(1)%></td>
								<td><%=rs.getString(9)%></td>
								<td><%=rs.getString(10)%></td>
								<td><%=rs.getString(11)%></td>
								<td><%=rs.getString(6)%></td>
								</tr>
					  <%
							}
					  %>
					  <%
						}
						catch(Exception e){
							e.printStackTrace();
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


