<h2>Opções</h2>
<ul>
    <?php if ($cliente['id'] > 0) : ?>
        <li>
            <a href="<?php echo site_url(); ?>clientes/dados/<?php echo $cliente['id']; ?>" title="Cancelar a edição">Cancelar</a>
        </li>
    <?php else : ?>
        <li>
            <a href="<?php echo site_url(); ?>clientes" title="Cancelar cadastro">Voltar</a>
        </li>
    <?php endif; ?>
</ul>