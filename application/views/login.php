<html>
    <head>
        <title>Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <?php if ($falha_login) : ?>
            <div class="erro">
                <p>Login falhou, tente novamente.</p>
            </div>
        <?php endif; ?>
        <form method="post" action="<?php echo site_url(); ?>login">
            <label for="login">
                Login: <input type="text" name="login" id="login" value="" maxlength="10" />
            </label>
            <label for="senha">
                Senha: <input type="password" name="senha" id="senha" value="" />
            </label>
            <input type="submit" value="Autenticar" />
        </form>
    </body>
</html>