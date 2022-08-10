<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/stylecadastro.css">
</head>



<body>
	<?php include("home.html"); ?>
	<title>Cadastro Idosos</title>
	<div id="cad-conteiner">
		<div class="idoso">
			<form action="recebeidoso.php" method="POST">
				<h3>Informações do Idoso</h3><br>
				<label>Nome:</label><br> <input type="text" name="nome"><br>
				<label>Data de Nascimento:</label><br> <input type="text" size="25" placeholder="__/__/____"><br>
				<label>Enfermeira:</label><br> <input type="text" name="enfermeira"><br>
				<label>Numero do CPF:</label> <br><input type="text" name="cpf"><br>
				<label>Plano de Saude:</label><br>
				<input type="radio" name="planosaude" value="sim">sim
				<input type="radio" name="planosaude" value="nao">nao<br>
				<label>Genero:</label><br>
				<input type="radio" name="genero" value="F">Feminino
				<input type="radio" name="genero" value="M">Masculino
				<input type="radio" name="genero" value="O">Outro<br>
				<label>Alergias:</label><br> <input type="text" name="alergia"><br>
				<label>Comorbidades:</label> <br><input type="text" name="comorbidade"><br>
				<label>Numero do SUS:</label><br> <input type="text" name="numerosus"><br>
				<label>Observação:</label> <br><input type="text" name="obs"><br>

		</div>
		<br><br><br>
		<div class="resp">
			<h3>Informações do Responsavel:</h3><br>
			<label>Nome:</label><input type="text" name="nomeresp"><br>
			<label>CPF do Responsavel:</label><input type="text" name="cpf_resp"><br>
			<label>Telefone:</label><input type="text" name="telefoneresp"><br>
			<label>Grau de Parentesco:</label> <input type="text" name="parentesco"><br>
			<label>Endereço:</label><input type="text" name="enderecoresp"><br>
			<input type="submit" name="enviar">
			</form>
		</div>

	</div>
</body>


</html>