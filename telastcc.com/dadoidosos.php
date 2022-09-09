<html>

<head>

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="css/dadoidoso.css">
</head>

<body>

	<?php
	include('navbar.html');
	include('conexao.php');
	if (isset($_POST['submit'])) {
		include_once('conexao.php');
		$DateAndTime = $_POST['DateAndTime'];
		$idutiliza = $_POST['idutiliza'];

		$result = mysqli_query($con, "INSERT INTO checagem (data_hora, idutiliza) 
    VALUES ('$DateAndTime', '$idutiliza')");
		print_r($_POST['DateAndTime']);
		print_r($_POST['idutiliza']);
	}
	$ididoso = $_GET['ididoso'];


	?>
	<div class="botoes">
		<div class="botao"><a id="cadastro" style=" padding: 25; width: 10px; height: 10px" class='btn btn-warning btn-sm' href='cadastromedicamentos.php?ididoso=<?php echo $ididoso ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
					<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
				</svg></a></div>
		<div class="botao"><a id="cadastro" style="padding: 25; width: 10px; height: 10px" class='btn btn-warning btn-sm' href='dadomedidoso.php?ididoso=<?php echo $ididoso ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-capsule" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429l4.243 4.242Z" />
				</svg></a></div>
				<div class="botao"><a id="cadastro" style="color: red; padding: 25; width: 10px; height: 10px" class='btn btn-warning btn-sm' href='editaridoso.php?ididoso=<?php echo $ididoso ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-capsule" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429l4.243 4.242Z" />
				</svg></a></div>
	</div>
	<?php
	$sql = "select * from idosos where ididoso=$ididoso";
	$rs = mysqli_query($con, $sql);
	while ($linha = mysqli_fetch_array($rs)) {
	?>
		<?php
		$genero = $linha['genero'];
		if ($genero == 'F') {
			$genero = 'Feminino';
		} elseif ($genero == 'M') {
			$genero = 'Masculino';
		}
		?><div id="titulo1" class="titulo">
			<h2>Dados do Idoso</h2>
		</div>
		<div class="tabela-conteiner">
			<div class="um">
				<? php/* echo $linha['nome_idoso']; */ ?>
				<table class="table table-info table-bordered">
					<thead>
						<?php /*<td class="pergunta"> <?php echo 'id: '; ?></td> 
						<td> <?php echo  $linha['ididoso']; ?></tr> */ ?>
						<td class="pergunta"> <?php echo 'nome '; ?></td>
						<td> <?php echo $linha['nome_idoso']; ?></tr>
						<td class="pergunta"> <?php echo 'Data de Nascimento '; ?></td>
						<td> <?php echo date_format(date_create($linha['nascimento']), "d/m/Y"); ?></tr>
						<td class="pergunta"> <?php echo 'CPF do paciente '; ?></td>
						<td> <?php echo $linha['cpf']; ?></tr>
						<td class="pergunta"> <?php echo 'Genero '; ?></td>
						<td> <?php echo $genero; ?></tr>
						<td class="pergunta"> <?php echo 'Alergias '; ?></td>
						<td> <?php echo $linha['alergia']; ?></tr>
						<td class="pergunta"> <?php echo 'Comorbidades '; ?></td>
						<td> <?php echo $linha['comorbidade']; ?></tr>
							<?php /*	<td class="pergunta"> <?php echo 'Numero do SUS '; ?></td>
						<td> <?php echo $linha['numero_sus']; ?></tr> */ ?>
						<td class="pergunta"> <?php echo 'Observações '; ?></td>
						<td> <?php echo $linha['obs']; ?></tr>
				</table>
			</div>
			<div class="dois">
				<!-- <p>Dados do Responsavel</p> -->
				<table class="table table-primary table-bordered">
					<td class="pergunta"> <?php echo 'Nome do Responsavel '; ?></td>
					<td> <?php echo $linha['nome_resp']; ?></tr>
					<td class="pergunta"> <?php echo 'Telefone do Responsavel '; ?></td>
					<td> <?php echo $linha['telefone_resp']; ?></tr>
					<td class="pergunta"> <?php echo 'CPF '; ?></td>
					<td> <?php echo $linha['cpf_resp']; ?></tr>
					<td class="pergunta"> <?php echo 'Grau de parentesco '; ?></td>
					<td> <?php echo $linha['parentesco']; ?></tr>
					<td class="pergunta"> <?php echo 'Endereço do responsavel '; ?></td>
					<td> <?php echo $linha['endereco_resp']; ?></tr>
				</table>
				</tr>
			</div>
		</div>
	<?php }

	?>
	<?php /*
		<div class="checagem">
			<a class='btn btn-info btn-sm' href="checagem_teste.php?ididoso=<?php echo $ididoso ?>"><i class='bx bxs-home'>checagem</i></a>
		</div>
		<?php
		$sql = "select * from utiliza, medicamentos where utiliza.idremedio = medicamentos.idremedio and ididoso=$ididoso";
		$rs = mysqli_query($con, $sql);
		while ($linha = mysqli_fetch_array($rs)) { ?>
			<div class="tabela-conteiner" id="3">
				<div class="remedio">
					<table class="table table-warning table-bordered">


						<!-- tentar transformar os remedios em accordion -->
						<thead>

							<td> <?php echo 'Nome do Remedio: '; ?></td>
							<td> <?php echo $linha['nome_remed'];; ?></tr>
								<?php $sql = "select * from medicamentos where idremedio=['idremedio']";

								?>

							<td> <?php echo 'Data Inicial: '; ?></td>
							<td> <?php echo $linha['data_inicio']; ?></tr>
							<td> <?php echo 'Data Final: '; ?></td>
							<td> <?php echo $linha['data_fim']; ?></tr>
							<td> <?php echo 'Dosagem: '; ?></td>
							<td> <?php echo $linha['dosagem']; ?></tr>
							<td> <?php echo 'Horario: '; ?></td>
							<td> <?php echo $linha['horario']; ?></tr>
							<td> <?php echo 'Observaçôes: '; ?></td>
							<td> <?php echo $linha['obs']; ?></tr> <?php } ?>

					</table>
				</div>
				<?php $Object = new DateTime();
				$Object->setTimezone(new DateTimeZone('America/Sao_Paulo'));
				$DateAndTime = $Object->format("Y-m-d h:i:s a"); ?>

				<?php $sql = "select idutiliza from utiliza, medicamentos where utiliza.idremedio = medicamentos.idremedio and ididoso=$ididoso";
				$rs = mysqli_query($con, $sql);
				while ($linha = mysqli_fetch_array($rs)) { ?>

					<!-- fazer com que esse input envie a data que o remedio foi tomado e quando ele tiver sido tomado no dia ficar verde (antes sendo vermelho) -->
					<!-- conseguir fazer a checagem aparecer do lado de cada remedio -->
					<form method="POST" class="form" action="dadoidosos.php?ididoso=<?php echo $linha['ididoso'] ?>">


						<input type="hidden" name="DateAndTime" value="<?php echo $DateAndTime ?>"></input>
						<input type="hidden" name="idutiliza" value="<?php echo $linha['idutiliza'] ?>"> <?php }
																											?>
					<button class="btn btn-outline-success mt-3" type="submit" name="submit">Criar</button>

					</form>


			 </div> 
			*/ ?>
</body>

</html>