<br>
<div class="caixa">
    <h4>Novo Cadastro de Venda</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <br><br><br> 
    <form method="post" action="insereCadastro.php" autocomplete="off">
        <div class="mb-3">
            <label for="titulo" class="form-label">Nome do Produto:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        
        <div class="mb-3">
            <label for="autor" class="form-label">Nome do Cliente:</label>
            <input type="text" class="form-control" id="autor" name="autor" required>
        </div>
        
        <div class="mb-3">
            <label for="genero" class="form-label">Valor da Venda:</label>
            <input type="text" class="form-control" id="genero" name="genero" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>   
</div>
<br><br>
