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
	<link rel="stylesheet" href="css/stylecadastro.css">
</head>

<body>
	<?php
	include("navbar.html");
	include("conexao.php");
	$ididoso = $_GET['ididoso'];

	"SELECT * FROM idosos WHERE ididoso=$ididoso";
	?>
	<title>Cadastro Medicamentos</title>
	</h2>
	<div id="cad-conteiner3">
		<form action="recebemedicamento.php" method="POST">
			<label>Medicamento: <select class='form-control' name="idremedio"></label>
			<option>Selecione</option>
			<?php $sql = "select * from medicamentos ";
			$rs = mysqli_query($con, $sql);
			while ($linha = mysqli_fetch_array($rs)) { ?>
				<option value=<?php echo $linha['idremedio'] ?>>
					<?php echo $linha['nome_remed'] . ' - ' . $linha['dosagem']; ?>
				</option>
			<?php } ?>
			</select>
			<!-- <label>Horario: <select></label>
			<option>Selecione</option>
			<option value="06">06hrs</option>
			<option value="08">08hrs</option>
			<option value="12">12hrs</option>
			<option value="14">14hrs</option>
			<option value="18">8hrs</option>
			<option value="20">20hrs</option>
			<option value="24">24hrs</option>
			<option value="02">02hrs</option>

			</select><BR> -->
			<label>Posologia Diaria:</label> <input class='form-control' type="text" name="posologia">
			<!-- <label>Data inicial:</label> <input type="date" name="datainicial"><br>
			<label>Data fim:</label> <input type="date" name="datafinal"><br> -->
			<label>Periodo(dias):</label><input class='form-control' type="text" name="periodo">
			<label>Observações:</label> <input class='form-control' type="text" name="obs"><br><br>
			<input type="hidden" name="ididoso" value="<?php echo $ididoso ?>">
			<input class='btn btn-success' type="submit" value="Enviar" name="btnSalvar" />
			<input class='btn btn-info' type="reset" value="Limpar campos" />
		</form>
	</div>
</body>

</html>