<?php

require_once './config.php';
$a=$_GET["code1"];
$b=$_GET["code2"];
$c=$_GET["code3"];
$sql = "INSERT INTO `test`(`a`,`b`,`c`)values('$a','$b','$c')";
try {
    $stmt = $DB->prepare($sql);
    $stmt->execute();
	echo "success";
  } catch (Exception $ex) {
    echo $ex->getMessage();
  }
  
?>