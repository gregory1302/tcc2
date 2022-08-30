<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estoque.css">

<body>
    <?php
    include("navbar.html");
    include("conexao.php");/*
    $sql = "select * from estoque, medicamentos where estoque.idremedio = medicamentos.idremedio";
    $rs = mysqli_query($con, $sql);
    while ($linha = mysqli_fetch_array($rs)) { ?>
        <div id="tabela-conteiner">
            <div id="tabela-estoque">
                <table class="table table-info table-bordered">
                    <thead>
                        <?php //  $totalremed = 
                        //conseguir fazer os comprimidos e as caixas se somarem
                        ?>
                        <td> <?php echo 'id do remedio: '; ?></td>
                        <td> <?php echo  $linha['idremedio']; ?></tr>
                        <td> <?php echo 'nome: '; ?></td>
                        <td> <?php echo  $linha['nome_remed']; ?></tr>
                        <td> <?php echo 'Dosagem: '; ?></td>
                        <td> <?php echo $linha['dosagem']; ?></tr>
                        <td> <?php echo 'Descrição: '; ?></td>
                        <td> <?php echo $linha['descricao']; ?></tr>
                        <td> <?php echo 'Quantidade de Caixas: '; ?></td>
                        <td> <?php echo $linha['caixas']; ?></tr>
                        <td> <?php echo 'Comprimidos em Cada Caixa: '; ?></td>
                        <td> <?php echo $linha['unid_remed']; ?></tr>
                        <td> <?php echo 'Total de Comprimidos: '; ?></td>
                        <td> <?php echo $linha['caixas']; ?></tr>
                        <td> <?php echo 'Observação: '; ?></td>
                        <td> <?php echo $linha['obs']; ?></tr><br>
                        <?php } */ ?>
    <div id="lista-conteiner">
        <table>
            <tr>
                <th class="id">ID</th>
                <th class="texto">Nome</th>
                <th class="text-center">Dosagem</th>
                <th class="texto">descricao</th>
                <th class="texto">Quantidade de Caixas</th>
                <th class="texto">Comprimidos em Cada Caixa</th>
                <th class="texto">Total de Comprimidos</th>
                <th class="texto">Observação</th>
            </tr>
            <tbody>

                <?php
                $sql = "select * from estoque, medicamentos where estoque.idremedio = medicamentos.idremedio";
                $rs = mysqli_query($con, $sql);
                while ($linha = mysqli_fetch_array($rs)) { ?>

                    <tr>
                        <td class="id"><?php echo $linha['idremedio'] ?></td>
                        <td class="texto"><?php echo $linha['nome_remed']; ?></td>
                        <td class="texto"><?php echo $linha['dosagem']; ?></td>
                        <td class="texto"><?php echo $linha['descricao']; ?></td>
                        <td class="texto"><?php echo $linha['caixas']; ?></td>
                        <td class="texto"><?php echo $linha['unid_remed']; ?></td>
                        <td class="texto"><?php echo $linha['caixas']; ?></td>
                        <td class="texto"><?php echo $linha['obs']; ?></td>



                        <!-- <td class="text-center"><a style="width: 50px; height: 40px" class='btn btn-warning btn-sm' href='checagem_teste.php?ididoso=<?php echo $linha['ididoso'] ?>'><i class='bx bxs-check-square'></i> -->


                    </tr>
                <?php } ?>

    </div>
    </div>
    </tbody>

    </table>

</body>

</html>