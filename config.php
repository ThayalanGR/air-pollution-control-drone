<?php

define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'sql305.epizy.com');
define('DB_SERVER_USERNAME', 'epiz_21398326');
define('DB_SERVER_PASSWORD', 'raspberry');

define('DB_DATABASE', 'epiz_21398326_sensordata');

// must end with a slash


$DB = mysqli_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD,DB_DATABASE);



// Check connection

if (mysqli_connect_errno())

{

echo "Failed to connect to MySQL: " . mysqli_connect_error();

 }



?>