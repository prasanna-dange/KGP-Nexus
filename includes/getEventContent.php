<?php
	require_once('database.php');
	$database=new Database();
	if(!isset($_POST['status'])){
		header("location:../index.php");
	}
	$eventID=$_POST['eventID'];
	$query="SELECT * FROM events WHERE eventId='".$eventID."' ";
	$result=$database->performQuery($query);
	$row=mysql_fetch_array($result);
	$obj=array('title'=>$row['eventTitle'],
				'description'=>$row["eventDescription"]);
	$json=array();
	array_push($json, $obj);
	// $obj='{ "title":"'.$row['eventTitle'].'",
	// 		"description":,"'.$row["eventDescription"].'",
	// 		"fromDate":,"'.$row["fromDate"].'",
	// 		"toDate":,"'.$row["toDate"].'",
	// 		"startTime","'.$row["startTime"].'",
	// 		"endTime",:"'.$row["endTime"].'",
	// 		"image":"'.$row["imageLink"].'" }';
	$objs=json_encode($json);
	echo $objs;
?>