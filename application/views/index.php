<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?php echo $titulo_pagina; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Page description" />
        <meta name="keywords" content="Page keywords" />
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/icon.gif" />
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/yahoo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/base.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/aligatoro.css" />
        <!-- / CSS -->
    </head>
    <body>
        <div id="corpo">
            <div id="topo">
                <div id="opcoes_topo">
                    <div>
                        <a href="<?php echo site_url(); ?>logout" title="Sair do sistema">
                            <img src="<?php echo base_url(); ?>img/icones/sair.png" alt="Sair" /><br />
                            Sair
                        </a>
                    </div>
                    <div>
                        <a href="<?php echo site_url(); ?>config" title="Configurações do sistema">
                            <img src="<?php echo base_url(); ?>img/icones/config.png" alt="Configurações" /><br />
                            Configurações
                        </a>
                    </div>
                </div>
                <div class="limpar"></div>
                <div id="menu_topo">
                    <ul>
                        <li>
                            <a href="<?php echo site_url(); ?>clientes" title="Controle de clientes">Clientes</a>
                        </li>
                    </ul>
                </div><!-- menu_topo -->
                <div class="limpar"></div>
            </div><!-- topo -->
            <div id="menu_lateral">
               <?php $this->load->view($menu); ?>
            </div><!-- menu_lateral -->
            <div id="conteudo">
                <?php if ($this->session->flashdata('informativo')) : ?>
                    <div id="informativo">
                        <?php echo $this->session->flashdata('informativo'); ?>
                    </div>
                <?php endif; ?>
                <?php $this->load->view($view); ?>
            </div><!-- conteudo -->
        </div><!-- corpo -->
    </body>
    <!-- Javascript -->
    <script src="<?php echo base_url(); ?>js/jquery-1.5.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery.maskedinput.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery.validate.cpfcnpj.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery.validate.braziliandate.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready( function() {
            $('#informativo').delay(4000).hide('slow');

            $('tbody tr:odd').css('background-color', '#EEE');

            // Máscara para campos da classe fone
            $('.fone').mask('(99)9999-9999');
        });
    </script>

    <?php if (isset($javascript)) : ?>
        <?php foreach($javascript as $script) : ?>
            <script src="<?php echo base_url() ?>js/<?php echo $script; ?>.js" type="text/javascript"></script>
        <?php endforeach; ?>
    <?php endif; ?>
    <!-- / Javascript -->
</html>