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
 /*
 foreach($json[0]  as $R=>$D){
echo $D."<br>";
 }
 
foreach($json  as $R=>$D)
$D['T1'];
 
echo "<table>";
foreach($json  as $R=>$D){
 echo "<tr id='Tr_".$R."'>"; 
 foreach($D as $key=>$Value){
    echo "<td id='Td_".$R."_".$key."'>".$Value."</td>";
  }
 echo "</tr>";
}
echo "</table>";

while($item = array_shift($json))
{
    foreach ($item as $key => $value)
    {
		echo "<pre>";
        echo $key.' => '.$value."\n";
echo "</pre>"; 
    }
}
*/
 
?>