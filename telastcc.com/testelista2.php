<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    >
    <link rel="stylesheet" type="text/css" href="css/lista.css">
</head>

<body>
    <?php include("navbar.html")   ?>
    <div>
        <div id="lista-conteiner">
            <table>
                <tr>

                    <div class="nome"></div>

                </tr>
                <tbody>

                    <?php
                    include("conexao.php");
                    $sql = "select * from idosos";
                    $rs = mysqli_query($con, $sql);
                    while ($linha = mysqli_fetch_array($rs)) {
                    ?>

                        <tr>
                            <div class="idoso"><a href='dadoidosos.php?ididoso=<?php echo $linha['ididoso'] ?>'><?php echo $linha['nome_idoso']  ?></a></div>
                            <!-- <td class="text-center"><a style="width: 50px; height: 40px" class='btn btn-warning btn-sm' href='dadoidosos.php?ididoso=<?php echo $linha['ididoso'] ?>'>
                                    <i class='bx bxs-user'></i> -->

                            <!-- <td class="text-center"><a style="width: 50px; height: 40px" class='btn btn-warning btn-sm' href='checagem_teste.php?ididoso=<?php /* echo $linha['ididoso'] */ ?>'><i class='bx bxs-check-square'></i> -->


                        </tr>
                    <?php } ?>

        </div>
    </div>
    </tbody>

    </table>
</body>

</html>