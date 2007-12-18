<?  
/************************************************************************/
/* Leonardo: Gliding XC Server					                        */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2004-5 by Andreadakis Manolis                          */
/* http://sourceforge.net/projects/leonardoserver                       */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
require_once dirname(__FILE__)."/EXT_config_pre.php";
require_once dirname(__FILE__)."/config.php";
require_once dirname(__FILE__)."/EXT_config.php";

$pass=makeSane($_GET['pass'],0);

if ($pass != $CONF_SitePassword || ! $pass) {
	return;
}

require_once dirname(__FILE__)."/CL_server.php";
require_once dirname(__FILE__)."/FN_waypoint.php";	
require_once dirname(__FILE__)."/FN_functions.php";	
require_once dirname(__FILE__).'/CL_brands.php';

$id=makeSane($_GET['id'],1);
$action=makeSane($_GET['action']);
$DBGlvl=makeSane($_GET['DBGlvl'],1);

$server=new Server($id);
$server->getFromDB();

// set to 1 for debug
if ($DBGlvl) $server->DEBUG=1;
if (($_GET['init']+0) == 1 ) {
?><head>

<style type="text/css">
body { background-color: #EDF3F1;}

body , p, table, td {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-style: normal;
	text-align:left;
	margin:0;
}
.ok { 
	font-weight:bold;
	color:#00CC33;
	display:inline;
}

.error { 
	font-weight:bold;
	color:#FF3300;
	display:inline;	
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<?
}

echo "<hr><strong>".date("d/m/Y H:i:s")."</strong>";
if ($action==1) { // server info 
	list($server_version,$server_releaseDate, $server_opMode,
		 $server_isMasterServer, $server_admin_email,
		 $php_version, $mysql_server_info ,$mysql_client_info )=$server->getInfo();
	echo "Leonardo version: $server_version<br>
		version releaseDate:	$server_releaseDate<br>
		opMode: $server_opMode<br>
		isMasterServer: $server_isMasterServer<br>
		admin_email: $server_admin_email<br>
		php_version: $php_version<br>
		mysql_server_info: $mysql_server_info<BR>
		mysql_client_info: $mysql_client_info<BR>";
} else if ($action==2) {
	$takeoffsList=$server->getTakeoffs(0); // takeoffs from time 0
	echo "<HR>Takeoff list<hr>";
	//print_r($takeoffsList);
	foreach($takeoffsList as $takeoff){
		$takeoff=(object) $takeoff;
		echo "#".urldecode($takeoff->intName).
			"#".urldecode($takeoff->name).
"#<BR>";
	}

} else if ($action==3) { //flights 

} else if ($action==4) { //send op files
	$files_send=$server->sendOPfiles(); 
	echo "Send $files_send files to slave server <BR>";
} else if ($action==5) { // sync (pull data from server )
	$moduleRelPath=moduleRelPath(0);
	$waypointsWebPath=$moduleRelPath."/".$waypointsRelPath;
	$flightsWebPath=$moduleRelPath."/".$flightsRelPath;

	$chunkSize=$_GET['chunkSize']+0;
	if (! $chunkSize ) $chunkSize=5;

	$server->sync($chunkSize,0);
} else if ($action==6) { // delete all external flights from this server
	$moduleRelPath=moduleRelPath(0);
	$waypointsWebPath=$moduleRelPath."/".$waypointsRelPath;
	$flightsWebPath=$moduleRelPath."/".$flightsRelPath;

	$server->deleteAllSyncedFlights();

} else if ($action==7) { // guess identical pilots 
	$moduleRelPath=moduleRelPath(0);
	$waypointsWebPath=$moduleRelPath."/".$waypointsRelPath;
	$flightsWebPath=$moduleRelPath."/".$flightsRelPath;

	$server->guessPilots();
} else if ($action==8) { // delete pilots -> only use if you know what you are doing , must be sed only after delete flights
	$server->deleteAllSyncedPilots();
	
} else if ($action==9) { // move sync pointer back (in effect will reprocess last n log entries next time
	echo "Sync Pointer was ".$server->lastPullUpdateID."<BR>";
	$server->rewindSyncPointer($_GET['moveCounterBack']+0);
	echo "Sync Pointer is ".$server->lastPullUpdateID."<BR>";
} else if ($action==99) { //test
	echo $server->url_op;
	echo "<BR>$action<br>";
	
	
	$pilotsList=$server->getPilots( 3 );
	print_r($pilotsList);
	
	//list($nearestWaypoint,$minTakeoffDistance)=$server->findTakeoff(49.4619,-8.67848);
	//echo "wpt: ".$nearestWaypoint->intName. "~ $minTakeoffDistance<BR>";
}

echo "\n";

?>