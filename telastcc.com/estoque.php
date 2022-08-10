<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
    <?php
    include("home.html");
    include("conexao.php");
    $sql = "select * from medicamentos";
    $rs = mysqli_query($con, $sql);
    while ($linha = mysqli_fetch_array($rs)) { ?>
        <div id="tabela-conteiner">
            <table border=1>
                <thead>
                    <td> <?php echo 'id do remedio: '; ?></td>
                    <td> <?php echo  $linha['idremedio']; ?></tr>
                    <td> <?php echo 'nome: '; ?></td>
                    <td> <?php echo  $linha['nome_remed']; ?></tr>
                    <td> <?php echo 'Descrição: '; ?></td>
                    <td> <?php echo $linha['descricao']; ?></tr>
                    <td> <?php echo 'Categoria: '; ?></td>
                    <td> <?php echo $linha['categoria']; ?></tr>
                        <?php /* <td> <?php echo 'Possiveis reações: '; ?></td>
                    <td> <?php echo $linha['possivel_reacao']; ?></tr>
                    <td> <?php echo 'Refrigeração: '; ?></td>
                    <td> <?php echo $linha['refrigeracao']; ?></tr> */ ?>
                    <td> <?php echo 'Observação: '; ?></td>
                    <td> <?php echo $linha['obs']; ?></tr><br>
                    <?php } ?>
</body>

</html>