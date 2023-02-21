<?php
	$conn = mysqli_connect("localhost", "root", "","somethingblue");
	
	if($conn == false){ die("ERRO: Não conseguiu conectar no MySQL. " . mysqli_connect_error()); }
	//mysqli_close($conn);
