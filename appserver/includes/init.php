<?php

// $host = "localhost:3306";
$host = "bogdansima2057146.ipagemysql.com";
// bogdansima2057146.ipagemysql.com
$user_name = "bogdanel";
$user_password = "Japonia123@";
$database = "firebase_database";

// $host = "walmyadmin02.int.bizland.net ";
// $user_name = "root";
// $user_password = "12345";
// $database = "firebase_database";

$link = mysqli_connect($host, $user_name, $user_password, $database);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error()) . "<br>";
}
 
// Print host information
echo "<span id='local-host-text'>Connect Successfully. Host info: " . mysqli_get_host_info($link) . "<br></span>";