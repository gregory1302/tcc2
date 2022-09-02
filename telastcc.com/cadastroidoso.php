<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!--  -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/stylecadastro.css">
</head>



<body>
	<?php include("navbar.html"); ?>
	<title>Cadastro Idosos</title>
	<!-- <div class="titulo"> -->
	<div id="titulo1" class="titulo">
		<h2>Cadastro do Idoso</h2>
	</div>
	<!-- <div id="titulo2" class="titulo">
			<h3>Responsavel</h3>
		</div>
	</div> -->
	<div id="cad-conteiner">
		<div class="idoso">
			<form action="recebeidoso.php" method="POST">

				<div class="idoso1">


					<label>Nome</label> <input class='form-control' type="text" name="nome">
					<label>Data de Nascimento</label><br> <input class='form-control' type="date" size="25" placeholder="__/__/____" name="nascimento">
					<label>Numero do CPF</label> <br><input class='form-control' type="text" name="cpf">

					<label>Plano de Saude</label><br>

					<div class="gen">
						<div class="radio">
							<input type="radio" name="planosaude" value="sim">sim
						</div>
						<div class="radio">
							<input type="radio" name="planosaude" value="nao">nao
						</div>

						<label>Genero:</label><br>
						<div class="radio">
							<input type="radio" name="genero" value="F">Feminino
						</div><br>

						<div class="radio"><input type="radio" name="genero" value="M">Masculino</div><br>

						<div class="radio"><input type="radio" name="genero" value="O">Outro</div>

					</div>
				</div>
		</div>
		<div class="idoso2">
			<label>Alergias</label><br> <input class='form-control' type="text" name="alergia">
			<label>Comorbidades</label> <input class='form-control' type="text" name="comorbidade">
			<label>Numero do SUS</label> <input class='form-control' type="text" name="numerosus">
			<label>Observação</label> <input class='form-control' type="text" name="obs">

		</div>

		<div class="resp">
			<div class="titulo">
				<!-- <h3>Responsavel</h3> -->
			</div>
			<label>Nome do Responsavel:</label><input class='form-control' type="text" name="nomeresp">
			<label>CPF do Responsavel</label><input class='form-control' type="text" name="cpf_resp">
			<label>Telefone</label><br><input class='form-control' type="text" name="telefoneresp">
			<label>Grau de Parentesco</label><input class='form-control' type="text" name="parentesco">
			<label>Endereço</label><br><input class='form-control' type="text" name="enderecoresp">
			<input id="botao" class='btn btn-success' type="submit" value="Enviar" name="btnSalvar" />
			<input id="botao" class='btn btn-info' type="reset" value="Limpar campos" />
			</form>
		</div>
	</div>
</body>


</html>