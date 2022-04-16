<?php

ini_set("display_errors",0);
error_reporting(0);


$caminho= "operador/contador.json";
	$fl = "operador/contador.json";
	if(file_exists($fl)){
		$h = fopen($fl, "r");
		$arr = json_decode(fread($h, filesize ($fl)));
		fclose($h);
		for($i = 0; $i < count($arr); $i++){
			$visitas = "".$arr[$i][0]."";
		}
	}


# incrementa
$x = $visitas;$x += 1;


$a='[["';
$b='"]]';


$rs= "".$a."".$x."".$b."";

# salva
$arquivo = fopen($caminho, "w");fwrite($arquivo, $rs);fclose($arquivo);
?>