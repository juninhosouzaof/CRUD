<?php

include ('connect.php');

$user = $_POST['user'];
$senha = $_POST['senha'];

$sql = mysqli_query($connectdb, "select * from plogin where user = '$user' and senha = '$senha'");

if(mysqli_num_rows($sql) > 0) {
    header('location: formadd.php');
    exit();
} else {
    echo "Usuário ou senha inválidos";
    exit();
}

?>