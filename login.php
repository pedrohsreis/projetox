<?php

	include 'include/conecta.php';

	$user = $_POST['username'];
	$senha = $_POST['password'];

	$result = $link->query("select senha as senha from medico where username = '" . $user ."'") or die($link->error);
	$check = mysqli_fetch_array($result);

	if($check['senha'] == $senha)
	{
		session_start();
		$_SESSION['user'] = $user;
		$_SESSION['senha'] = $senha;
		$_SESSION['logado'] = 1;
		header('location: notifications.php');
		exit;

	}
	else{
		header('location: index.php');
	}


?>