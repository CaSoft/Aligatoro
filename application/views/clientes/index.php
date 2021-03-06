<h2>Exibindo clientes cadastrados</h2>

<?php if ($paginacao) : ?>
    <div class="paginacao">
        <?php echo $paginacao; ?>
    </div>
<?php endif; ?>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th class="alinha_direita">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente) : ?>
            <tr>
                <td><?php echo $cliente['nome']; ?></td>
                <td><?php echo $cliente['telefone1']; ?></td>
                <td><?php echo $cliente['email']; ?></td>
                <td class="alinha_direita">
                    <a href="<?php echo site_url(); ?>clientes/dados/<?php echo $cliente['id']; ?>" title="Ver dados do cliente">
                        <img src="<?php echo base_url(); ?>img/icones/ver.png" alt="Ver dados do cliente" />
                    </a>
                    <a href="<?php echo site_url(); ?>clientes/editar/<?php echo $cliente['id']; ?>" title="Editar dados do cliente">
                        <img src="<?php echo base_url(); ?>img/icones/editar.png" alt="Editar dados do cliente" />
                    </a>
                    <a href="<?php echo site_url(); ?>clientes/impressao/<?php echo $cliente['id']; ?>" title="Imprimir os dados do cliente" class="impressao_popup">
                        <img src="<?php echo base_url(); ?>img/icones/impressao.png" alt="Imprimir os dados do cliente" />
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <img src="<?php echo base_url(); ?>img/icones/remocao.png" class="clicavel" onclick="remover_cliente(<?php echo $cliente['id']; ?>);" />
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
