<?php
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];



include "../includes/conexao.php";

$sql = "insert into produtos(nome, categoria, preco)
    values ('$nome', '$categoria', '$preco')";

    $resultado = $conexao->query($sql);

    mysqli_close($conexao);

    header("location: index.php");

?>