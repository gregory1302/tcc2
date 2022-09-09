<!DOCTYPE html>
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
<?php
include('conexao.php');

$ididoso = $_GET['ididoso'];

if (isset($_POST['editar'])) {
    $nome_idoso = $_POST['nome_idoso'];
	$nascimento = $_POST['nascimento'];
	// $enfermeira = $_POST['enfermeira'];
	$genero = $_POST['genero'];
	$alergia = $_POST['alergia'];
	$comorbidade = $_POST['comorbidade'];
	$obs = $_POST['obs'];
	// $numerosus = $_POST['numerosus'];
	$cpf = $_POST['cpf'];
	// $planosaude = $_POST['planosaude'];
	$nomeresp = $_POST['nomeresp'];
	$telefoneresp = $_POST['telefoneresp'];
	$cpf_resp = $_POST['cpf_resp'];
	$parentesco = $_POST['parentesco'];
	$enderecoresp = $_POST['enderecoresp'];

    $sql = "UPDATE idosos SET 
                nome_idoso='$nome_idoso', 
                nascimento='$nascimento', 
                genero='$genero',
                alergia='$alergia' 
				comorbidade='$comorbidade' 
				obs='$obs' 
				-- numerosus='$numerosus' 
				cpf='$cpf' 
				-- planosaude='$planosaude' 
				nomeresp='$nomeresp' 
				telefoneresp='$telefoneresp' 
				cpf_resp='$cpf_resp' 
				parentesco='$parentesco' 
				enderecoresp='$enderecoresp' 
            WHERE ididoso='$ididoso'";

    mysqli_query($con, $sql);

    if (mysqli_affected_rows($con) > 0) {
        echo "<script> alert('Usuário alterado com sucesso.') </script>";
        header("Location: listaUsuarios.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
$sql = "SELECT * FROM idosos WHERE ididoso=$ididoso";
$rs = mysqli_query($con, $sql);
$linha = mysqli_fetch_array($rs);
?>
<?php include('navbar.html'); ?>
<?php /*<div class='container'>
    <h3 class='p-3'>Cadastrar usuário</h3>

    <form method="post">
        <div class="form-group">
            Nome: <input class='form-control' type="text" name="nomeuser" value="<?php echo $linha['nomeuser']; ?>" />
        </div>
        <div class="form-group">
            Senha: <input class='form-control' type="password" name="senhauser" value="<?php echo $linha['senhauser'] ?>" />
        </div>
        <div class="form-group">
            Email: <input class='form-control' type="email" name="emailuser" value="<?php echo $linha['emailuser'] ?>" />
        </div>
        <div class="form-group">
            Data de nascimento: <input class='form-control' type="date" name="nascuser" value="<?php echo $linha['nascuser'] ?>" />
        </div>
        <div class="form-group">
            <input class='btn btn-success' type="submit" value="Salvar dados" name="btnSalvar" />
            <input class='btn btn-info' type="reset" value="Limpar campos" />
        </div>
    </form>
</div>
*/

	
	$sql = "INSERT INTO idosos (nome_idoso, nascimento, genero, enfermeira, alergia, comorbidade, obs, numero_sus, cpf, plano_saude, nome_resp, telefone_resp, parentesco, endereco_resp) 
  VALUES ('$nome', '$nasceu', '$genero', '$enfermeira', '$alergia', '$comorbidade',  '$obs', '$numerosus', '$cpf', '$planosaude', '$nomeresp', '$telefoneresp', '$parentesco', '$enderecoresp')";

	include("conexao.php");
	?>
	<div id="cad-conteiner">
		<div class="idoso">

			<form action="recebeidoso.php" method="POST">

				<div class="idoso1">


					<label>Nome do Idoso</label> <input class='form-control' value="<?php echo $linha['nome_idoso']; ?> "type="text" name="nome">
					<label>Data de Nascimento</label><br> <input class='form-control' value="<?php echo $linha['nascimento']; ?>" type="date" size="25" placeholder="__/__/____" name="nascimento">
					<label>Numero do CPF</label> <br><input class='form-control' value="<?php echo $linha['cpf']; ?>" type="text" name="cpf">

					<!-- <label>Plano de Saude</label><br>


					<div class="radio">
						<input type="radio" name="planosaude" value="sim">Sim
					</div>
					<div class="radio">
						<input type="radio" name="planosaude" value="nao">Não
					</div> -->

					<label>Genero:</label><br>
					<div class="radio">
						<input type="radio" name="genero" value="F">F
					</div>

					<div class="radio"><input type="radio" name="genero" value="M">M</div>

					<div class="radio"><input type="radio" name="genero" value="O">O</div>


				</div>
		</div>
		<div class="idoso2">
			<label>Alergias</label><br> <input class='form-control' value="<?php echo $linha['alergia']; ?>" type="text" name="alergia">
			<label>Comorbidades</label> <input class='form-control' value="<?php echo $linha['comorbidade']; ?>" type="text" name="comorbidade">
			<!-- <label>Numero do SUS</label> <input class='form-control' type="text" name="numerosus"> -->
			<label>Observaçôes</label> <textarea class='form-control' value="<?php echo $linha['obs']; ?>" type="textarea " name="obs"></textarea>

		</div>

		<div class="resp">
			<!-- <div class="titulo">
				 <h3>Responsavel</h3> 
			</div> -->
			<label>Nome do Responsavel:</label><input class='form-control' value="<?php echo $linha['nome_resp']; ?>" type="text" name="nomeresp">
			<label>CPF do Responsavel</label><input class='form-control' value="<?php echo $linha['cpf_resp']; ?>" type="text" name="cpf_resp">
			<label>Telefone</label><br><input class='form-control' value="<?php echo $linha['telefone_resp']; ?>" type="text" name="telefoneresp">
			<label>Grau de Parentesco</label><input class='form-control' value="<?php echo $linha['parentesco']; ?>" type="text" name="parentesco">
			<label>Endereço</label><br><input class='form-control' value="<?php echo $linha['endereco_resp']; ?>" type="text" name="enderecoresp">
			<input id="botao" class='btn btn-success' type="submit" value="Enviar" name="btnSalvar" />
			<input id="botao" class='btn btn-info' type="reset" value="Limpar campos" />
			</form>
		</div>
	</div>
</body>

</html>