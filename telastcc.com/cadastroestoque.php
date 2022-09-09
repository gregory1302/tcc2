<html>

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
    <?php
    include("navbar.html");
    include("conexao.php"); ?>
    <title>Cadastro Idosos</title>
    <div class='container' id="cad-conteiner3">
        <form action="recebeestoque.php" method="POST">
            <br><br>
            <label>Medicamento <select class='form-control' name="idremedio"></label>
            <option>Selecione</option>
            <?php $sql = "select * from medicamentos ";
            $rs = mysqli_query($con, $sql);
            while ($linha = mysqli_fetch_array($rs)) { ?>
                <option value=<?php echo $linha['idremedio'] ?>>
                    <?php echo $linha['nome_remed'] . ' - ' . $linha['dosagem'] . 'mg'; ?>
                </option>
            <?php } ?> </select>

            <label>Quantidade de caixas</label> <br><input class='form-control' type="text" name="quant_caixa">
            <label>Quantidade de remedios em cada caixa</label> <br><input class='form-control' type="text" name="unid_caixa"> <br>
            <!-- <label>Observação</label> <br><input class='form-control' type="text" name="obs"><br> -->

            <input class='btn btn-success' type="submit" value="Enviar" name="btnSalvar" />
            <input class='btn btn-info' type="reset" value="Limpar campos" />
    </div>

    </div>
</body>


</html>