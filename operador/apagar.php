<?php
if(isset($_GET["apg"])){
	// JSON 
	$fl = "seguro/ccs.json";
	if(file_exists($fl)){
		$h = fopen($fl, "r");
		$arr = json_decode(fread($h, filesize ($fl)));
		\array_splice($arr, $_GET["apg"], 1);
		fclose($h);
	}
	$fhs = fopen($fl, 'w') or die("can't open file");
	fwrite($fhs, json_encode($arr));
	fclose($fhs);
	// fim
	echo '
	<script type="text/javascript">
		alert("CC Apagada com sucesso");
		location="index.php";
	</script>
	';
}
?>