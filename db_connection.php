<?php

//$serverName = "192.168.10.12"; //serverName\instanceName 
$serverName = "105.27.237.138"; //serverName\instanceName 
$connectionInfo = array("Database"=>"Boxes", "UID"=>"sa", "PWD"=>"miminaniW");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

// if( $conn ) {
//      echo "Connection established.<br />";
// }else{
//      echo "Connection could not be established.<br />";
//      die( print_r( sqlsrv_errors(), true));
// }
// ?>
