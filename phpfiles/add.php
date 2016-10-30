<?php
include("connect.php");

$link=Connection();
$id=$_POST["id"];
$timestamp = date("Y-m-d H:i:s",time());
$temp=$_POST["temp"];

//$link->free();
$stmt= $link->prepare("INSERT INTO temperature_table (id, ts, temp) VALUES ( ?, ?, ? )");
if($stmt){
	$stmt->bind_param("ssd",$id, $timestamp, $temp);
	$stmt->execute();
	$stmt->close();
	$link->close();
}else {
	die ("MySQL Error ". $link->error);
}

header("Location: index.php");
?>
