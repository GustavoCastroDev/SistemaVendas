<?php

include 'db.php';

$id = $_POST['id'];

$query = "delete from vendas where id = $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');