<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>lista idosos</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"> -->
	<title></title>
	<link rel="stylesheet" href="css/lista.css">
</head>

<body>
	<?php /*

	session_start();

	define('DB_SERVER', 'proj.sombrio.ifc.edu.br');
	define('DB_USERNAME', 'medlar');
	define('DB_PASSWORD', 'unygahyda');
	define('DB_NAME', 'medlar_site');


	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	// Check connection

	if ($link === false) {
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	if ($_POST || !$_SESSION['autenticado']) {

		$sql = "SELECT * FROM Usuarios WHERE Login = '" . $_POST['login'] . "' AND Senha = '" . $_POST['senha'] . "'";

		$result = mysqli_query($link, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "Autenticado <br>";
			$_SESSION['autenticado'] = 1;
		} else {
			echo "Usuario ou senha incorretos";
			die;
		}
	} */ ?>
	<div>
		<?php include("navbar.html")   ?>
		<div id="lista-conteiner">
			<table>
				<tr>
					<th class="id">ID</th>
					<th class="texto">Nome</th>
					<th class="text-center" colspan="2">Ação</th>
				</tr>
				<tbody>

					<?php
					include("conexao.php");
					$sql = "select * from idosos";
					$rs = mysqli_query($con, $sql);
					while ($linha = mysqli_fetch_array($rs)) {
					?>

						<tr>
							<td class="id"><?php echo $linha['ididoso'] ?></td>
							<td class="texto"><?php echo $linha['nome_idoso'] ?></td>
							<td class="text-center"><a style="width: 50px; height: 40px" class='btn btn-warning btn-sm' href='dadoidosos.php?ididoso=<?php echo $linha['ididoso'] ?>'>
									<i class='bx bxs-user'></i>

									<!-- <td class="text-center"><a style="width: 50px; height: 40px" class='btn btn-warning btn-sm' href='checagem_teste.php?ididoso=<?php echo $linha['ididoso'] ?>'><i class='bx bxs-check-square'></i> -->


						</tr>
					<?php } ?>

		</div>
	</div>
	</tbody>

	</table>
</body>

</html>