<?php
/*$host = "127.0.0.1";
$port = 3306;
$socket = "";
$user = "root";
$password = "aluno01";
$dbname = "medlar";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die('Could not connect to the database server' . mysqli_connect_error());


//echo 'ta conectado';*/
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="aluno01";
$dbname="medlar";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();



