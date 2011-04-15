<h2>Opções</h2>
<ul>
    <li>
        <a href="<?php echo site_url(); ?>clientes/impressao/<?php echo $cliente['id']; ?>" title="Imprimir os dados do cliente" class="impressao_popup">Imprimir cadastro</a>
    </li>
    <li>
        <a href="<?php echo site_url(); ?>clientes/editar/<?php echo $cliente['id']; ?>" title="Editar o cadastro">Editar</a>
    </li>
    <li>
        <a href="<?php echo site_url(); ?>clientes" title="Cadastro de clientes">Voltar aos clientes</a>
    </li>
</ul>