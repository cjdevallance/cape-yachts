<?php

$submitted = $_POST['result'];
$desired = $_POST['check7'];
$critical = $_POST['criticalinfo'];

if (!empty($critical) && !($critical == "")) {
$gotomail = "DeadendEmail";

	} else {

$gotomail = "sandy@capeyachts.com,3414@bwleadmanager.com,qadominionmarinemedia@gmail.com";

}

if ($submitted==$desired) {

//Include configuration parameters
require("setup/config.php");

$subject = "What's Your Boat Worth Form \n\n";

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$contactphone = "unchecked";
$contactemail = "unchecked";
$selected_radio = $_POST["contact"];
$comment = $_POST['comment'];
$reference = $_POST['reference'];

$error_msg = "";

$msg .= "This is a message submitted from the What's Your Boat Worth Form on Cape Yachts \n\n";

$msg .= "--------------------------------------------------------------------------------\n\n";

$msg .= "Customer Information\n\n";

$msg .= "--------------------------------------------------------------------------------\n\n";

if($name){
	$msg .= "Name: \t $name \n";
}

if($phone){
	$msg .= "Phone Number: \t $phone \n";
}

if(!$email){
	$error_msg .= "Email Address: \n";
}
if($email){
	if(!preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\._\-]+\.[a-zA-Z]{2,4}/", $email)){
		echo "\n<br>That is not a valid email address.  Please <a href=\"javascript:history.back()\">return</a> to the previous page and try again.\n<br>";
		exit;
	}			
	$msg .= "Email Address: \t $email \n";
}

if ($selected_radio == "Phone") {
	$contactphone = "checked";
	$msg .= "Contact me by Phone: \t $contactphone \n";
}

else if ($selected_radio == "Email") {
	$contactemail = "checked";
	$msg .= "Contact me by Email: \t $contactemail \n";
}

if($comment){
	$msg .= "Boat Description: \t $comment \n";
}

if($reference){
	$msg .= "Page Reference: \t $reference \n";
}



if (false !== strpos($reference,'?sent')) {
  $url.="&sentboatworth=yes#boatworth";
} else {
  $url.="?sentboatworth=yes#boatworth";
}





$sender_email="";

if(!isset($name)){
	if($name == ""){
		$sender_name="";
	}
}else{
	$sender_name="Cape Yachts";
}
if(!isset($email)){
	if($email == ""){
		$sender_email="$gotomail";
	}
}else{
	$sender_email=$gotomail;
}
if($error_msg != ""){
	echo "You didn't fill in these required fields:<br>"
	.nl2br($error_msg) .'<br>Please <a href="javascript:history.back()">return</a> to the previous page and try again.';
	exit;
}
$mailheaders  = "MIME-Version: 1.0\r\n";
$mailheaders .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$mailheaders .= "From: $sender_name <$sender_email>\r\n";
$mailheaders .= "Reply-To: $sender_email <$sender_email>\r\n"; 
mail("$gotomail", $subject, stripslashes($msg), $mailheaders, "-f" . $email);
header("Location: $reference$url");
} else {
// Alerts that the problem was not answered correctly.
	echo "<script type=\"text/javascript\">window.alert('You did not solve the problem correctly.');window.history.back();</script>";
}
?>
