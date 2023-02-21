<html>

<head>
	<title>Something Blue - Área restrita - Tela inicial</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="estilo.css" rel="stylesheet">
</head>

<body>
	<header>
		<h2>Something Blue - Acesso administrador</h2>
	</header>

	<section>
		<nav>
		<ul id="menu">
				<li><a href="inicio.php" class="active">Inicio</a></li>
				<li><a href="disponiveis.php">Itens disponíveis</a></li>
				<li><a href="emprestados.php">Itens emprestados</a></li>
				<li><a href="vencidos.php" >Empréstimos vencidos</a></li>
				<li><a href="devolvidos.php" >Empréstimos devolvidos</a></li>
			</ul>
		</nav>

		<article>
		<?php
		include "../includes/autentica.php";
		$sql = "SELECT * FROM usuarios WHERE id= ".$_SESSION["id"];
		$res = mysqli_query($conn, $sql);

		if ($res) {
			while ($row = mysqli_fetch_assoc($res)) {
				echo "Bem-vindo usuário: " .$row["nomeusuario"];
			}
		}
			 
		?>


			<br> <a href="../logout.php">Sair</a>
		</article>
	</section>

	<footer>
		<p>Todos os direitos reservados.</p>
	</footer>



</body>

</html>