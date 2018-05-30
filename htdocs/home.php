<?php

/*

 * @author THAYALAN G R

 */

include('config.php');
session_start();
include("checklogin.php");
check_login();



?>

<!DOCTYPE html>

<html>



<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--<meta http-equiv="refresh" content="5"> -->

    <title>EYANTRA</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" type="text/css">

</head>

<body>

<div style="text-align:center;"><h1>APCTMD</h1>

            <div class="top-menu" style="float:right;">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>

</div>
      <div style="float:left; margin-left:20px;">
	  <iframe src="https://thayalangr.000webhostapp.com/" style="width:300px; height:600px; border:none;"></iframe>
</div>
	  <div style="float:right; margin-right:20px; text-align:center; ">
             <h2>Live Feed</h2>
	  <iframe src="http://freakiest-budgerigar-9742.dataplicity.io/?action=stream" style="width:640px; height:320px; border:none;"></iframe>
	  </div>
	  <div style="clear:both;"></div>
                          

</body>

</html>