<?php

include 'db.php';

$nome_produto = $_POST['nome_produto'];
$nome_cliente = $_POST['nome_cliente'];
$valor = $_POST['valor'];

$query = "INSERT INTO vendas (nome_produto, nome_cliente, valor) 
VALUES ('$nome_produto', '$nome_cliente', '$valor')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');
