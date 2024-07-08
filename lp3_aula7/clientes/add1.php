<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$data = $_POST['date'];
$obs = $_POST['obs'];

include "../includes/conexao.php";

$sql = "insert into clientes(nome, email, cpf, data, sexo, obs)
    values ('$nome', '$email', '$cpf', '$data', '$sexo', '$obs')";

    $resultado = $conexao->query($sql);

    //echo $sql; die(); exit();

    mysqli_close($conexao);

header("location: index.php");
?>