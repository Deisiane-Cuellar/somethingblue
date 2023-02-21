<html>

<head>
	<title>Acesso administrador - Empréstimos vencidos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="estilo.css" rel="stylesheet">
</head>

<body>
	<header>
		<h2>EMPRÉSTIMOS DEVOLVIDOS</h2>
	</header>

	<section>
		<nav>
			<ul id="menu">
				<li><a href="inicio.php">Inicio</a></li>
				<li><a href="disponiveis.php">Itens disponíveis</a></li>
				<li><a href="emprestados.php">Itens emprestados</a></li>
				<li><a href="vencidos.php">Empréstimos vencidos</a></li>
				<li><a href="devolvidos.php" class="active">Empréstimos devolvidos</a></li>
			</ul>
		</nav>

		<article>
		<table border="1">
				<tr>
					<td>nomeusuario</td>
					<td>celular</td>
					<td>item</td>
					<td>tamanho</td>
					<td>Cor</td>
					<td>Data Devolução</td>
				</tr>

				<?php

				include "../includes/conecta.php";

				//Monta comando SQL para obter todos 
				$sql = "SELECT p.id AS idpegaremprestado, p.dtdevolucao, e.*,  u.* FROM pegaremprestado AS p 
					left join empreste AS E ON E.id=p.id_empreste 
					left join usuarios AS U ON U.id=p.id_usuarios
						WHERE entregue=1 ";


				//Envia código SQL para o MySQL
				$res = mysqli_query($conn, $sql);

				//Se encontrou algum registro
				if ($res) {
					//Percorre os registros encontrados
					while ($row = mysqli_fetch_assoc($res)) {

						echo "<tr>
								<td>" . $row['nomeusuario'] . "</td>
								<td>" . $row['celular'] . "</td>
								<td>" . $row['item'] . "</td>
								<td>" . $row['tamanho'] . "</td>
								<td>" . $row['cor'] . "</td>
								<td>" . $row['dtdevolucao'] . "</td>

								
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