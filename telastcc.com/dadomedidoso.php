<html lang="en">

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
    include("home.html");
    include("conexao.php");
    $ididoso = $_GET['ididoso'];
    $sql = "select * from utiliza, medicamentos where utiliza.idremedio = medicamentos.idremedio and ididoso=$ididoso";
    $rs = mysqli_query($con, $sql);
    while ($linha = mysqli_fetch_array($rs)) { ?>
        <div class="tabela-conteiner">
            <div class="remedio">
                <table class="table table-info table-bordered">


                    <!-- tentar transformar os remedios em accordion -->
                    <thead>

                        <td> <?php echo 'Nome do Remedio: '; ?></td>
                        <td> <?php echo $linha['nome_remed'];; ?></tr>
                            <?php $sql = "select * from medicamentos where idremedio=['idremedio']";

                            ?>

                        <td> <?php echo 'Data Inicial: '; ?></td>
                        <td> <?php echo $linha['data_inicio']; ?></tr>
                        <td> <?php echo 'Data Final: '; ?></td>
                        <td> <?php echo $linha['data_fim']; ?></tr>
                        <td> <?php echo 'Dosagem: '; ?></td>
                        <td> <?php echo $linha['dosagem']; ?></tr>
                        <td> <?php echo 'Horario: '; ?></td>
                        <td> <?php echo $linha['horario']; ?></tr>
                        <td> <?php echo 'Observaçôes: '; ?></td>
                        <td> <?php echo $linha['obs']; ?></tr><br> <?php } ?>

                </table>
            </div>
</body>

</html>