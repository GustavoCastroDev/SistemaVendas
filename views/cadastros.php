<div class="caixa">
    <h4>Cadastro de Vendas</h4>
    <br>
    <a type="button" class="btn btn-primary" style="background-color: black; border: none;"  href="?pagina=novoCadastro"><i class="bi bi-plus"></i>Cadastrar Vendas</a>
    <br><br><br>
    <div>
        <table id="table_id" class="cell-border">
            <thead>
                <tr>
                    <th">Codigo</th>
                    <th">Nome do Produto</th>
                    <th">Nome do Cliente</th>
                    <th">Valor da Venda</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($linha = mysqli_fetch_array($consultaCadastros)) {
                    echo '<tr>';
                    echo '<td style="word-wrap: break-word; border: white solid 1px">' . $linha['id'] . '</td>';
                    echo '<td style="word-wrap: break-word; border: white solid 1px">' . $linha['nome_produto'] . '</td>';
                    echo '<td style="word-wrap: break-word; border: white solid 1px">' . $linha['nome_cliente'] . '</td>';
                    echo '<td style="word-wrap: break-word; border: white solid 1px">' . $linha['valor'] . '</td>';

                    echo '<td>
                    <div class="row">
                        <div class="col-6">
                            <form method="post" action="?pagina=editaCadastro">
                                <select style="display:none" name="id">
                                    <option value="' . $linha['id'] . '" selected>' . $linha['id'] . '</option>
                                </select>
                                <button type="submit" class="btn btn-outline-dark" style="border:none; color: green">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </form>
                        </div>

                        <div class="col-6">
                            <form method="post" action="deletaCadastro.php">
                                <select style="display:none" name="id">
                                    <option value="' . $linha['id'] . '" selected>' . $linha['id'] . '</option>
                                </select>
                                <button type="submit" class="btn btn-outline-dark" style="border:none; color: red">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
