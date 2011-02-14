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
                <td></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>