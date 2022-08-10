<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylecadastro.css">
</head>



<body>
    <?php include("home.html");
    include("conexao.php"); ?>
    <title>Cadastro Idosos</title>
    <div id="cad-conteiner3">
        <form action="recebeestoque.php" method="POST">

            <label>Medicamento: <select name="idremedio"></label>
            <option>Selecione</option>
            <?php $sql = "select * from medicamentos ";
            $rs = mysqli_query($con, $sql);
            while ($linha = mysqli_fetch_array($rs)) { ?>
                <option value=<?php echo $linha['idremedio'] ?>>
                    <?php echo $linha['nome_remed'] ?>
                </option>
            <?php } ?> </select><BR>

            <label>Observação:</label> <br><input type="text" name="obs"><br>

    </div>
</body>


</html>