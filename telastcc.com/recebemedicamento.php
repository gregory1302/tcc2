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
    include("conexao.php");
    $ididoso = $_POST['ididoso'];
    $idremedio = $_POST['idremedio'];
    // $horario = $_POST['horario'];
    $posologia = $_POST['posologia'];
    $periodo = $_POST['periodo'];
    // $datainicial = $_POST['datainicial'];
    // $datafinal = $_POST['datafinal'];
    $obs = $_POST['obs'];


    /*echo "ID REMEDIO: $idremedio <br>";
    echo "ID IDOSO: $ididoso <br>";
    echo "Horario: $horario <br>";

    echo "Dosagem: $dosagem <br>";

    echo "Datainicial: $datainicial <br>";
    echo "data final: $datafinal <br>";
    echo "Observação: $obs <br>";*/ ?>

    <div class="tabela-conteiner">
        <table class="table table-info table-bordered">
            <thead>
                <td> <?php echo 'ID IDOSO: '; ?></td>
                <td> <?php echo  $ididoso; ?></tr>
                <td> <?php echo 'Nome do Remedio: '; ?></td>
                <?php $sql = "select * from medicamentos where idremedio = $idremedio";
                $rs = mysqli_query($con, $sql);
                while ($linha = mysqli_fetch_array($rs)) {
                ?> <td> <?php echo $linha['nome_remed'];
                    } ?></tr>

                    <td> <?php echo 'Posologia: '; ?></td>
                    <td> <?php echo $posologia . ' - ' . 'comprimidos'; ?></tr>
                    <td> <?php echo 'Periodo: '; ?></td>
                    <td> <?php echo $periodo . ' - ' . 'dias'; ?></tr>

                    <td> <?php echo 'Observação: '; ?></td>
                    <td> <?php echo $obs; ?></tr>

                        <?php $sql = "INSERT INTO utiliza (ididoso, idremedio, posologia, periodo, obs)
    VALUES ('$ididoso', '$idremedio', $posologia, '$periodo', '$obs')";
                        mysqli_query($con, $sql);
                        //echo $sql;
                        mysqli_close($con);
                        echo $sql;
                        ?>

</body>

</html>