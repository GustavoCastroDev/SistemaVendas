<div class="caixa">
    <!--Login-->
    <form method="post" action="login.php">
        <h3>Sell Tracker</h3>
        <div class="form-group">
            <label for="exampleInputEmail1">Login</label>
            <input type="text" style="background-color: black; color: white; border:none;" class="form-control" name="usu_login" placeholder="Digite seu login">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" style="background-color: black; color: white; border:none;" class="form-control" name="usu_senha" placeholder="Digite sua senha">
        </div>
        <br>
        <button type="submit" class="btn btn-primary" style="background-color: black; color: white; border:none;">Entrar</button>
        <br><br>
    </form>
    <!--Fim Login-->
    <?php
        if (isset($_GET['erroLogin'])) {
            echo '
                <div id="erroLogin" class="alert alert-danger" role="alert">
                    Erro! Tente novamente.
                </div>
            ';
        }
    ?>
</div>