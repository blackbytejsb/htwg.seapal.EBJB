<?php
// prevent the server from timing out
set_time_limit(0);

// include the web sockets server script (the server is started at the far bottom of this file)
require 'class.PHPWebSocket.php';

// when a client sends data to the server
function wsOnMessage($clientID, $message, $messageLength, $binary) {
	global $Server;
	global $boatPosition;
	
	
	$ip = long2ip( $Server->wsClients[$clientID][6] );

	// check if message length is 0
	if ($messageLength == 0) {
		$Server->wsClose($clientID);
		return;
	}

	//Send the message to everyone but the person who said it
	foreach ( $Server->wsClients as $id => $client ) {
		if ( $id != $clientID )
			$Server->wsSend($id, "Visitor $clientID ($ip) said: $message");
		else 
			$Server->wsSend($id, "You said: $message");
	}
}

// when a client connects
function wsOnOpen($clientID)
{
	global $Server;
	global $boatPosition;
	
	$Server->log( "$ip ($clientID) has connected." );

	//Send a join notice to everyone but the person who joined
	if ($boatPosition == NULL) {
		$boatPosition = array("lat" => 47.66, "long" => 9.16);
	}
	
	foreach ( $Server->wsClients as $id => $client ) {
		if ( $id == $clientID )
				updateBoatPosition($clientID);
	}
	//$Server->wsSend($id, "bla");
}

// when a client closes or lost connection
function wsOnClose($clientID, $status) {
	global $Server;
	global $boatPosition;
	
	$ip = long2ip( $Server->wsClients[$clientID][6] );

	$Server->log( "$ip ($clientID) has disconnected." );

	//Send a user left notice to everyone in the room
	foreach ( $Server->wsClients as $id => $client )
		$Server->wsSend($id, "Visitor $clientID ($ip) has left the room.");
}

function updateBoatPosition($clientID)
{
	global $Server;
	global $boatPosition;
	
	$boatPosition["lat"] += 0;
	$boatPosition["long"] += 0.0001;
	
	$Server->wsSend($clientID, json_encode($boatPosition));
	
	sleep(5);
    updateBoatPosition($clientID);
}


// start the server
$Server = new PHPWebSocket();
$Server->bind('message', 'wsOnMessage');
$Server->bind('open', 'wsOnOpen');
$Server->bind('close', 'wsOnClose');
// for other computers to connect, you will probably need to change this to your LAN IP or external IP,
// alternatively use: gethostbyaddr(gethostbyname($_SERVER['SERVER_NAME']))
$Server->wsStartServer('127.0.0.1', 9300);
$boatPosition = NULL;

?>