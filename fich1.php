<?php
$test = file_get_contents("infor.json");
$json=json_decode($test,true);

if(isset($_POST["ch"]) && isset($_POST["x"])){
	$ch=($_POST["ch"]);$x=($_POST["x"]);
	$json[0][$x]=$ch;
		$json = json_encode($json);
		$test=file_put_contents('infor.json',$json);
		$json=json_decode($test,true);
		
}
?>