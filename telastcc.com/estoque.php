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
    include("conexao.php"); ?>
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
                        <td class="texto"><?php echo $linha['unid_cp']; ?></td>
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