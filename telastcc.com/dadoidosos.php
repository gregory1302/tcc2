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
	/*if (isset($_POST['submit'])) {
		include_once('conexao.php');
		$DateAndTime = $_POST['DateAndTime'];
		$idutiliza = $_POST['idutiliza'];

		$result = mysqli_query($con, "INSERT INTO checagem (data_hora, idutiliza) 
    VALUES ('$DateAndTime', '$idutiliza')");
		print_r($_POST['DateAndTime']);
		print_r($_POST['idutiliza']);
	}*/
	$ididoso = $_GET['ididoso'];


	?>
	<div class="botoes">
		<div class="botao"><a id="cadastro" style=" padding: 25; width: 10px; height: 10px" class='btn btn-info btn-sm' href='cadastromedicamentos.php?ididoso=<?php echo $ididoso ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
					<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
				</svg></a></div>
		<div class="botao"><a id="cadastro" style="padding: 25; width: 10px; height: 10px" class='btn btn-warning btn-sm' href='dadomedidoso.php?ididoso=<?php echo $ididoso ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-capsule" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429l4.243 4.242Z" />
				</svg></a></div>
		<div class="botao"><a id="cadastro" style=" padding: 25; width: 10px; height: 10px" class='btn btn-secondary btn-sm' href='editaridoso.php?ididoso=<?php echo $ididoso ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
					<path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
				</svg></a></div>
		<div class="botao"><a id="cadastro" style=" padding: 25; width: 10px; height: 10px" class='btn btn-danger btn-sm' href='deletaidoso.php?ididoso=<?php echo $ididoso ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
					<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
					<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
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
				<?php /* echo $linha['nome_idoso']; */ ?>
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