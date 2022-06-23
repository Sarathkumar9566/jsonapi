<?php

    // $conn = mssql_connect("120.138.8.94", "texplus_texplus", "Texplu$@20202020");
    // $conn = new mysqli("localhost", "texplus_texplus", "", "test");
	
	$conn = mssql_connect("FUTURE8\F2005_T2", "sa", "sbva/tech");
    // mssql_select_db("texplus_TEXTILE1");

    if (!$conn) {
        echo "connection failed!";
        exit();
    }
	else {
		echo "connection Success!";
        exit();
	};
	
	
	// $serverName = "FUTURE8\F2005_T2"; //serverName\instanceName

   // Since UID and PWD are not specified in the $connectionInfo array,
   // The connection will be attempted using Windows Authentication.
   // $connectionInfo = array( "Database"=>"texplus_TEXTILE1","UID"=>"sa","PWD"=>"sbva/tech");
   // $conn = sqlsrv_connect( $serverName, $connectionInfo);

   // if( $conn ) {
     // echo "Connection established.<br />";
   // }else{
     // echo "Connection could not be established.<br />";
     // die( print_r( sqlsrv_errors(), true));
   // }
   
   
?>