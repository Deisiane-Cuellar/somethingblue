<?php include "conecta.php" ?>

<?php
	//(Re)iniciar sessão
	session_start();
	
	//Se NÃO foi criada uma sessão auntenticada
	//Se NÃO existe o valor ID guardado na sessão
	if(isset($_SESSION['id']) == false){
		
		header("Location: ../../index.php?autentica=1");
	}