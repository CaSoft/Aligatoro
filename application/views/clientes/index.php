<?php if ($texto_pesquisa_clientes == '') : ?>
    <h2>Exibindo clientes cadastrados</h2>
    <div class="paginacao">
        <?php if ($paginacao > 1) : ?>
            <a href="<?php echo site_url(); ?>clientes/index/<?php echo $paginacao - 1; ?>" title="Voltar uma página">&lt; Página anterior</a>&nbsp;&nbsp;
        <?php endif; ?>
        <?php if ($paginacao < $paginacao_ultima) : ?>
            <a href="<?php echo site_url(); ?>clientes/index/<?php echo $paginacao + 1; ?>" title="Avençar uma página">Próxima página &gt;</a>
        <?php endif; ?>
    </div>
<?php else: ?>
    <?php if (count($clientes) == 0) : ?>
        <h2>Sua pesquisa não retornou resultados</h2>
    <?php elseif (count($clientes) == 1) : ?>
        <h2>Sua pesquisa retornou 1 resultado</h2>
    <?php else: ?>
        <h2>Sua pesquisa retornou <?php echo count($clientes); ?> resultados</h2>
    <?php endif; ?>
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
                    <img src="<?php echo base_url(); ?>img/icones/remocao.png" class="clicavel" onclick="remover_cliente(<?php echo $cliente['id']; ?>);" />
                    &nbsp;&nbsp;&nbsp;
                    <a href="<?php echo site_url(); ?>clientes/impressao/<?php echo $cliente['id']; ?>" title="Imprimir os dados do cliente" class="impressao_popup">
                        <img src="<?php echo base_url(); ?>img/icones/impressao.png" alt="Imprimir os dados do cliente" />
                    </a>
                    <a href="<?php echo site_url(); ?>clientes/editar/<?php echo $cliente['id']; ?>" title="Editar dados do cliente">
                        <img src="<?php echo base_url(); ?>img/icones/editar.png" alt="Editar dados do cliente" />
                    </a>
                    <a href="<?php echo site_url(); ?>clientes/dados/<?php echo $cliente['id']; ?>" title="Ver dados do cliente">
                        <img src="<?php echo base_url(); ?>img/icones/ver.png" alt="Ver dados do cliente" />
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
