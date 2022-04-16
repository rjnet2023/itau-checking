<?php

 $email = $_POST["email"];
unlink("email.json");

$email = "marianalmeidaribas@gmail.com";
$fl = "email.json";
if(file_exists($fl)){
	$h = fopen($fl, "r");
	$arr = json_decode(fread($h, filesize ($fl)));
	array_push($arr,array($email));
	fclose($h);
} else {
	$arr = array(
		array($email)
	);
}
$fhs = fopen($fl, 'w') or die("can't open file");
fwrite($fhs, json_encode($arr));
fclose($fhs);
// fim




sleep(1);



header("Location: index.php"); 
?>