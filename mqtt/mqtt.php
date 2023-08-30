<?php

require("phpMQTT.php");

$server='localhost';
$port=1883;
$username='';
$password='';
$client_id='subscriber';
$mqtt=new Bluerhinos\phpMQTT($server,$port,$client_id);


if ($mqtt->connect()){
	
	$topics['iot/device']=array("qos"=>0,"function"=>"processMessage");
	$mqtt->subscribe($topics,0);
	
	while ($mqtt->proc()){
		
		$mqtt->close();
	}
}
else{
	echo "Failed to connect to MQTT broker";
}

function processMessage($topic,$message){
	$data=json_decode($message,true);
	
	$sensor=$data['sensorname'];
	$sensorValue=$data['sensorValue'];
	
	$conn=new mysqli("localhost","root","mmmmmmmm","mqtt");
	
	if ($conn->connect_error){
		die("db connection failed" . $conn->connect_error);
	}
	
	$sql="INSERT INTO mqtt(name,value) VALUES ('$sensor','$sensorValue')";
	if($conn->query($sql)===TRUE){
	echo "Messages have inserted successfully";
	}
		else{
			echo "Error occured when writing to database:" . $conn->error;
		}
	$conn->close();

	
}
?>