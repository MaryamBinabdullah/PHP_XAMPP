<?php

$sName = "localhost";
$uName = "root";
$sPass = "";
$db_name = "project";

try {
	$conn = new PDO("mysql:host=$sName;dbname=$db_name",
                    $uName, $sPass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, 
		                PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Connection failed: ". $e->getMessage();
}
?>