<?php

include 'db.php';  // Incluindo a conexão com o banco de dados

// Recebe os dados do formulário
$id = $_POST['id'];
$nome_produto = $_POST['nome_produto'];  // Campo 'nome_produto'
$nome_cliente = $_POST['nome_cliente'];    // Campo 'nome_cliente'
$valor = $_POST['valor'];  // Campo 'valor' - novo campo

// Atualiza o livro na tabela 'produtos'
$query = "UPDATE vendas 
          SET nome_produto='$nome_produto', nome_cliente='$nome_cliente', valor='$valor'
          WHERE id=$id";

// Executa a consulta
if (mysqli_query($conexao, $query)) {
    // Redireciona para a página de cadastros após o sucesso
    header('Location: index.php?pagina=cadastros');
} else {
    // Caso ocorra um erro, exibe a mensagem
    echo "Erro ao atualizar o livro: " . mysqli_error($conexao);
}
?>
