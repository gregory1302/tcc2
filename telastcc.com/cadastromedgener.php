<html lang="pt-br">

<head>
	<meta charset="utf-8">
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
	<?php include("navbar.html"); ?>
	<title>Cadastro Medicamentos</title>
	<div id="cad-conteiners">
		<form id="2" action="recebemedgener.php" method="POST">
			<label>Nome</label> <input class='form-control' type="text" name="nomeremed">
			<label>Descrição</label> <input class='form-control' type="text" name="descricao">
			<label>Dosagem</label> <input class='form-control' type="text" name="dosagem">
			<label>Observações</label> <input class='form-control' type="text" name="obs"><br>
			<input class='btn btn-success' type="submit" value="Enviar" name="btnSalvar" />
			<input class='btn btn-info' type="reset" value="Limpar campos" />
	</div>
</body>

</html>