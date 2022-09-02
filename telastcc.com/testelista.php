<!DOCTYPE html>
<html lang="en">

<head>
    <title>Table V02</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/testelista.css">
    <!--===============================================================================================-->
</head>

<body>
    <?php include("navbar.html")   ?>
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table">
                    <div class="row header">
                        <div class="cell">
                            Full Name
                        </div>
                    </div>
                    <div class="row"> <?php
                                        include("conexao.php");
                                        $sql = "select * from idosos";
                                        $rs = mysqli_query($con, $sql);
                                        while ($linha = mysqli_fetch_array($rs)) {
                                        ?>
                            <div class="cell" data-title="Full Name">
                                <?php echo $linha['nome_idoso'] ?>
                            <?php } ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>


    <div id="lista-conteiner">
        <table>
            <tr>
                <!-- <th class="id">ID</th> -->
                <th class="texto">Nome</th>
                <th class="text-center" colspan="2">Ação</th>
            </tr>
            <tbody>

                <?php
                include("conexao.php");
                $sql = "select * from idosos";
                $rs = mysqli_query($con, $sql);
                while ($linha = mysqli_fetch_array($rs)) {
                ?>

                    <tr>
                        <!-- <td class="id"><?php //echo $linha['ididoso'] 
                                            ?></td> -->
                        <td class="texto"><?php echo $linha['nome_idoso'] ?></td>
                        <td class="text-center"><a style="width: 50px; height: 40px" class='btn btn-warning btn-sm' href='dadoidosos.php?ididoso=<?php echo $linha['ididoso'] ?>'>
                                <i class='bx bxs-user'></i>

                                <!-- <td class="text-center"><a style="width: 50px; height: 40px" class='btn btn-warning btn-sm' href='checagem_teste.php?ididoso=<?php echo $linha['ididoso'] ?>'><i class='bx bxs-check-square'></i> -->


                    </tr>
                <?php } ?>

    </div>
    </div>
    </tbody>

    </table>
</body>

</html>