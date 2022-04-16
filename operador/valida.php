<?php




error_reporting(0);

$users = array();

$fl = "usuarios.json";
	if(file_exists($fl)){
		$h = fopen($fl, "r");
		$arr = json_decode(fread($h, filesize ($fl)));
		fclose($h);
		for($i = 0; $i < count($arr); $i++){
		    	$user = "".$arr[$i][0]."";
             $pass = "".$arr[$i][1]."";
			
		array_push($users, $user.'|'.$pass);
	}
}



if (isset($_POST['x'])) {
	$user = $_POST['user']; 
	$pass = $_POST['pass'];
	if (empty($user) || empty($pass)) {
		echo '<center><br><br><br>Preencha todos os campos';
	}else {
		$log = $user.'|'.$pass;
	if (in_array($log, $users)) {
		session_start();
		$_SESSION['user']=$user;
		$_SESSION['pass']=$pass;
		header('Location: index.php');
	}else {
		echo '<center><br><br><br>Usuario ou senha incorretos';
	}
}

}

if (isset($_COOKIE['msg'])) {
	echo $_COOKIE['msg'];
	unset($_COOKIE['msg']);
}

?>
