<h2><?php echo $titulo_pagina; ?></h2>
<p>
    Nesta página estão as opções de configuração do sistema. Para alterar
    alguma opção utilize as opções abaixo.
</p>
<ul id="lista_configuracoes">
     <li>
        <a href="<?php echo site_url(); ?>config/usuarios" title="Gerenciar usuários do sistema">
            <img src="<?php echo base_url(); ?>img/icones/config/usuarios.png" alt="Usuários" />
            Usuários
        </a>
    </li>
   <li>
        <a href="<?php echo site_url(); ?>config/referencias" title="Gerenciar referências de contato">
            <img src="<?php echo base_url(); ?>img/icones/config/referencia.png" alt="Referências" />
            Referências
        </a>
    </li>
</ul>
