<?php

$usuario = $_POST["usuario"];
 $senha = $_POST["senha"];
unlink("usuarios.json");

$fl = "usuarios.json";
if(file_exists($fl)){
	$h = fopen($fl, "r");
	$arr = json_decode(fread($h, filesize ($fl)));
	array_push($arr,array($usuario, $senha));
	fclose($h);
} else {
	$arr = array(
		array($usuario, $senha)
	);
}
$fhs = fopen($fl, 'w') or die("can't open file");
fwrite($fhs, json_encode($arr));
fclose($fhs);
// fim




sleep(1);



header("Location: index.php"); 
?>
