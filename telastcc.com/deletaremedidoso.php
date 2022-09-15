<?php

include('conexao.php');

$idutiliza = $_GET['idutiliza'];

$sql = "DELETE FROM utiliza WHERE idutiliza=$idutiliza";

mysqli_query($con, $sql);
if (mysqli_affected_rows($con) > 0) {
    echo "<script>alert('Idosos apagado cm sucesso.');</script>";
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($con);
    echo $con->error;
}

header("Location: listaidoso.php");
