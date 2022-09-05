<!DOCTYPE html>
<html lang="en">

<head>
    <title>Table V02</title>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css"> -->
    <link rel="stylesheet" type="text/css" href="css/lista.css">
</head>

<body>
    <?php include("navbar.html")   ?>
    <div>
        <div id="lista-conteiner">
            <table>
                <tr>
                    <!-- <th class="id">ID</th> -->
                    <div class="nome">Idosos</div>

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
                            <td class="text-center"><a style="width: 50px; height: 40px" class='btn btn-warning btn-sm' href='dadoidosos.php?ididoso=<?php echo $linha['ididoso'] ?>'>
                                    <i class='bx bxs-user'></i>

                                    <!-- <td class="text-center"><a style="width: 50px; height: 40px" class='btn btn-warning btn-sm' href='checagem_teste.php?ididoso=<?php /* echo $linha['ididoso'] */ ?>'><i class='bx bxs-check-square'></i> -->


                        </tr>
                    <?php } ?>

        </div>
    </div>
    </tbody>

    </table>
</body>

</html>