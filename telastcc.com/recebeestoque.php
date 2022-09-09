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
    include("navbar.html");
    include("conexao.php");

    $idremedio = $_POST['idremedio'];
    $quant_caixa = $_POST['quant_caixa'];;
    $unid_caixa = $_POST['unid_caixa'];
    // $obs = $_POST['obs'];
    $add_cp = $quant_caixa * $unid_caixa;
    echo 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk' . $add_cp;
    ?>


    <div id="tabela-conteiner">
        <div class="dois">
            <table class="table table-info table-bordered">
                <thead>
                    <td> <?php echo 'nome: '; ?></td>
                    <?php
                    $sql = "select * from medicamentos where idremedio=$idremedio";
                    $rs = mysqli_query($con, $sql);
                    while ($linha = mysqli_fetch_array($rs)) { ?>
                        <td> <?php echo  $linha['nome_remed']; ?></tr>
                        <td> <?php echo 'Dosagem: '; ?></td>
                        <td> <?php echo $linha['dosagem'] . 'mg'; ?></tr>
                        <?php } ?>
                        <td> <?php echo 'Quantidade de Caixas: '; ?></td>
                        <td> <?php echo $quant_caixa; ?></tr>
                        <td> <?php echo 'Remedios por Caixa: '; ?></td>
                        <td> <?php echo $unid_caixa; ?></tr>
                        <td> <?php echo 'Comprimidos adicionados no Estoque: '; ?></td>
                        <td> <?php echo $add_cp; ?></tr>
                            <?php /*<td> <?php echo 'Observação: '; ?></td>
                            <td> <?php echo $obs; ?></tr> */ ?>
        </div>
        <?php $sql = "INSERT INTO estoque (idremedio, caixas, unid_cp, add_cp)
					VALUES ('$idremedio', '$quant_caixa', '$unid_caixa', '$add_cp')";

        mysqli_query($con, $sql);
        //echo $sql;
        mysqli_close($con);
        echo $sql
        ?>

</body>

</html>