<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

if ($date = $tar >0){ 
	echo "The Future";}
elseif ($date = $tar <0){
echo "The Past";}
elseif ($date = $tar = 0){
echo "Oops";}

echo strpos($date, "/");// 4- error

echo" .count($date) ";// 5- works

echo strlen ($date); // 6 -works

//echo substr(trin($date), -2); //8- 

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

?>
