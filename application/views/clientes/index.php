<form id="form_pesquisa_clientes" name="form_pesquisa_clientes" method="post" action="<?php echo site_url(); ?>clientes">
    <input type="text" name="texto_pesquisa_clientes" id="texto_pesquisa_clientes" value="<?php echo $texto_pesquisa_clientes; ?>" />
    <select size="1" name="tipo_pesquisa_clientes" id="tipo_pesquisa_clientes">
        <option value="nome">Nome</option>
        <option value="telefone">Telefone</option>
        <option value="email">E-mail</option>
        <option value="cidade">Cidade</option>
    </select>
    <input id="botao_pesquisar_clientes" type="submit" value="Pesquisar" />
</form>
<?php if ($texto_pesquisa_clientes == '') : ?>
    <h2>Exibindo últimos clientes cadastrados</h2>
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
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente) : ?>
            <tr>
                <td><?php echo $cliente['nome']; ?></td>
                <td><?php echo $cliente['telefone1']; ?></td>
                <td><?php echo $cliente['email']; ?></td>
                <td>
                    <a href="<?php echo site_url(); ?>clientes/editar/<?php echo $cliente['id']; ?>" title="Editar dados do cliente">
                        <img src="<?php echo site_url(); ?>img/icones/editar.png" alt="Editar dados do cliente" />
                    </a>
                    <a href="<?php echo site_url(); ?>clientes/dados/<?php echo $cliente['id']; ?>" title="Ver dados do cliente">
                        <img src="<?php echo site_url(); ?>img/icones/ver.png" alt="Ver dados do cliente" />
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>