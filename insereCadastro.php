<?php

include 'db.php';

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];

$query = "INSERT INTO vendas (nome_produto, nome_cliente, valor) 
VALUES ('$titulo', '$autor', '$genero')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');
