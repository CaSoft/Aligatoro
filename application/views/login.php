<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Aligatoro &gt; Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Page description" />
        <meta name="keywords" content="Page keywords" />
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/icon.gif" />

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/yahoo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/base.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css" />
        <!-- / CSS -->
    </head>
    <body>
        <div id="caixa">
            <form method="post" action="<?php echo site_url(); ?>login">
                <fieldset>
                    <label for="login">
                        Login <input type="text" name="login" id="login" value="" maxlength="10" />
                    </label>
                    <label for="senha">
                        Senha <input type="password" name="senha" id="senha" value="" />
                    </label>
                    <input type="submit" value="Autenticar" />
                </fieldset>
            </form>
        </div><!-- caixa -->
        <?php if ($falha_login) : ?>
            <div class="erro">
                <p>Login falhou, tente novamente.</p>
            </div>
        <?php endif; ?>
    </body>
</html>