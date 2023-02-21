<html>

<head>
	<title>Acesso administrador - Itens disponíveis</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="estilo.css" rel="stylesheet">

</head>

<body>
	<header>
		<h2>ITENS DISPONÍVEIS</h2>
	</header>

	<section>
		<nav>
		<ul id="menu">
				<li><a href="inicio.php">Inicio</a></li>
				<li><a href="disponiveis.php"  class="active">Itens disponíveis</a></li>
				<li><a href="emprestados.php">Itens emprestados</a></li>
				<li><a href="vencidos.php" >Empréstimos vencidos</a></li>
				<li><a href="devolvidos.php">Empréstimos devolvidos</a></li>
			</ul>
		</nav>

		<article>
			<table border="1">
				<tr>
					<td>Item</td>
					<td>Tamanho</td>
					<td>Cor</td>
				</tr>

				<?php

				include "../includes/conecta.php";

				//Monta comando SQL para obter todos 
				$sql = "SELECT * FROM empreste WHERE status=1";

				//Envia código SQL para o MySQL
				$res = mysqli_query($conn, $sql);

				//Se encontrou algum registro
				if ($res) {
					//Percorre os registros encontrados
					while ($row = mysqli_fetch_assoc($res)) {

						echo "<tr>
								<td>" . $row['item'] . "</td>
								<td>" . $row['tamanho'] . "</td>
								<td>" . $row['cor'] . "</td>
								<td><a href='excluiritem.php?id=" . $row['id'] . "'>Excluir</a></td>
							</tr>";
					}
				}

				?>
			</table>

			<a href="inicio.php">Voltar</a>
		</article>
	</section>

	<footer>
		<p>Todos os direitos reservados.</p>
	</footer>

</body>

</html>