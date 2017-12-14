<?php

	if($_SESSION['logado'] != 1){
		header('location: index.php');
		echo $_SESSION['logado'];
	}

?>