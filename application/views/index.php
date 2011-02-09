<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?php echo $titulo_pagina; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Page description" />
        <meta name="keywords" content="Page keywords" />
        <link rel="shortcut icon" href="<?php echo site_url(); ?>img/icon.gif" />
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>css/aligatoro.css" />
        <!-- / CSS -->
    </head>
    <body>
        <div id="corpo">
            <div id="topo">
                <div id="menu_topo">
                    <ul>
                        <li>
                            <a href="<?php echo site_url(); ?>clientes" title="Controle de clientes">Clientes</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url(); ?>logout" title="Sair do sistema">Sair</a>
                        </li>
                    </ul>
                </div><!-- menu_topo -->
            </div><!-- topo -->
            <div id="menu_lateral">
               <?php $this->load->view($menu); ?>
            </div><!-- menu_lateral -->
            <div id="conteudo">
                <?php if (isset($informativo)) : ?>
                    <div id="informativo">
                        <?php echo $informativo; ?>
                    </div>
                <?php endif; ?>
                <?php $this->load->view($view); ?>
            </div><!-- conteudo -->
        </div><!-- corpo -->
    </body>
    <!-- Javascript -->
    <script src="<?php echo site_url(); ?>js/jquery-1.5.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready( function() {
            $('#informativo').delay(4000).hide('slow');
        });
    </script>
    <!-- / Javascript -->
</html>