<?php

$man = $_POST['man'];
$type = $_POST['type'];
$cond = $_POST['cond'];
$rid = $_POST['rid'];
$minLn = $_POST['minLn'];
$maxLn = $_POST['maxLn'];
$minPr = $_POST['minPr'];
$maxPr = $_POST['maxPr'];
$minYr = $_POST['minYr'];
$maxYr = $_POST['maxYr'];
$hull = $_POST['hmid'];
$engines = $_POST['enid'];
$fuel = $_POST['ftid'];
$urlx = $_POST['urlx'];

if	($_POST['source'] == "inv"){
	$url = "co-brokerage-inventory/?slim=pp296476&searched=true";
}  
if  ($_POST['source'] == "BBS") {
	$url = "branded-boat-shopper?slim=pp296476&lineonly=&ps=20&searched=true";
}     


if($man){
	$url .= "&man=" . stripslashes($man);
}
if($type){
	$url .= "&type=" . $type;
}
if($cond){
	$url .= "&is=" . $cond;
}
if($rid){
	$url .= "&rid=" . $rid;
}
if($minLn){
	$url .= "&fromLength=" . $minLn;
}
if($maxLn){
	$url .= "&toLength=" . $maxLn;
}
if($minPr){
	$url .= "&fromPrice=" . $minPr;
}
if($maxPr){
	$url .= "&toPrice=" . $maxPr;
}
if($minYr){
	$url .= "&fromYear=" . $minYr;
}
if($maxYr){
	$url .= "&toYear=" . $maxYr;
}
if($hull){
	$url .= "&hmid=" . $hull;
}
if($engines){
	$url .= "&enid=" . $engines;
}
if($fuel){
	$url .= "&ftid=" . $fuel;
}
if($ps){
	$url .= "&ps=" . $ps;
}
if($msint){
	$url .= "&msint=" . $msint;
}

$url .= "&lineonly";

header("Location: " . $url);

?>