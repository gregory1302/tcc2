<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>cadastroidosophp</title>
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
  include("conexao.php");

  $nome = $_POST['nome'];
  $nasceu = $_POST['nascimento'];
  $cpf = $_POST['cpf'];
  $planosaude = $_POST['planosaude'];
  $genero = $_POST['genero'];
  $alergia = $_POST['alergia'];
  $comorbidade = $_POST['comorbidade'];
  $numerosus = $_POST['numerosus'];
  $obs = $_POST['obs'];
  $nomeresp = $_POST['nomeresp'];
  $telefoneresp = $_POST['telefoneresp'];
  $cpf_resp = $_POST['cpf_resp'];
  $parentesco = $_POST['parentesco'];
  $enderecoresp = $_POST['enderecoresp'];
  $sql = "INSERT INTO idosos (nome_idoso, nascimento, genero, alergia, comorbidade, obs, numero_sus, cpf, plano_saude, nome_resp, telefone_resp, cpf_resp, parentesco, endereco_resp) 
    VALUES ('$nome', '$nasceu', '$genero', '$alergia', '$comorbidade',  '$obs', '$numerosus', '$cpf', '$planosaude', '$nomeresp', '$telefoneresp', '$cpf_resp', '$parentesco', '$enderecoresp')";
  /*echo $sql;*/
  mysqli_query($con, $sql);
  echo "usuario inserido com sucesso"; ?>

  <div class="tabela-conteiner">
    <table id="recebeidoso" class="table table-info table-bordered">
      <thead>
        <td> <?php echo 'nome: '; ?></td>
        <td> <?php echo $nome; ?></tr>
        <td> <?php echo 'Data de Nascimento: '; ?></td>
        <td> <?php echo $nasceu; ?></tr>
        <td> <?php echo 'CPF do paciente: '; ?></td>
        <td> <?php echo $cpf; ?></tr>
        <td> <?php echo 'Genero: '; ?></td>
        <td> <?php echo $genero; ?></tr>
        <td> <?php echo 'Alergias: '; ?></td>
        <td> <?php echo $alergia; ?></tr>
        <td> <?php echo 'Comorbidades: '; ?></td>
        <td> <?php echo $comorbidade; ?></tr>
        <td> <?php echo 'Numero do SUS: '; ?></td>
        <td> <?php echo $numerosus; ?></tr>
        <td> <?php echo 'Observações: '; ?></td>
        <td> <?php echo $obs; ?></tr>
      </thead>
    </table>
    <table id="receberesp" class="table table-primary table-bordered">
      <td> <?php echo 'Nome do Responsavel: '; ?></td>
      <td> <?php echo $nomeresp; ?></tr>
      <td> <?php echo 'Telefone do Responsavel: '; ?></td>
      <td> <?php echo $telefoneresp; ?></tr>
      <td> <?php echo 'Grau de parentesco com o responsavel: '; ?></td>
      <td> <?php echo $parentesco; ?></tr>
      <td> <?php echo 'CPF do responsavel: '; ?></td>
      <td> <?php echo $cpf_resp; ?></tr>
      <td> <?php echo 'Endereço do responsavel: '; ?></td>
      <td> <?php echo $enderecoresp; ?></tr>
    </table>
    </tr>





  </div>
</body>

</html>