<?php

include('conexao.php');

$ididoso = $_GET['ididoso'];

$sql = "DELETE FROM idosos WHERE ididoso=$ididoso";

mysqli_query($con, $sql);
if (mysqli_affected_rows($con) > 0) {
    echo "<script>alert('Idosos apagado cm sucesso.');</script>";
    header("Location: listaidoso.php");
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($con);
    echo $con->error;
}

