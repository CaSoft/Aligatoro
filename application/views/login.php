<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?php echo SYSTEM_NAME; ?> &gt; Login</title>
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
                        Usuário <input type="text" name="login" id="login" value="" maxlength="10" />
                    </label>
                    <label for="senha">
                        Senha <input type="password" name="senha" id="senha" value="" />
                    </label>
                    <input type="submit" value="Autenticar" />
                </fieldset>
            </form>
            <?php if ($falha_login) : ?>
                <div class="erro">
                    <p>Login falhou, tente novamente.</p>
                </div>
            <?php endif; ?>
        </div><!-- caixa -->
        <div id="rodape">
            <p><?php echo SYSTEM_NAME; ?></p>
            <p>Desenvolvido por <a href="http://casoft.info/" title="Site da CaSoft">CaSoft Tecnologia</a> e <a href="http://jacaretecnologia.com.br/" title="Site da Jacaré">Jacaré Tecnologia</a></p>
            <p>Licenciado pela GNU GPLv3</p>
        </div>
    </body>
    <script src="<?php echo base_url(); ?>js/jquery-1.5.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery.corner.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/login.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready( function() {
            $('input[type=submit], input[type=button], #menu_lateral ul li').corner('8px');
        });
    </script>
</html>