<h2>Pesquisar</h2>
<form id="form_pesquisa_clientes" name="form_pesquisa_clientes" method="post" action="<?php echo site_url(); ?>clientes">
    <fieldset>
        <input type="text" name="texto_pesquisa_clientes" id="texto_pesquisa_clientes" value="<?php echo $texto_pesquisa_clientes; ?>" />
        <select size="1" name="tipo_pesquisa_clientes" id="tipo_pesquisa_clientes">
            <option value="nome">Nome</option>
            <option value="telefone">Telefone</option>
            <option value="email">E-mail</option>
            <option value="cidade">Cidade</option>
        </select>
        <input id="botao_pesquisar_clientes" type="submit" value="Pesquisar" />
    </fieldset>
</form>
<h2>Opções</h2>
<ul>
    <li>
        <a href="<?php echo site_url(); ?>clientes/novo" title="Cadastrar novo cliente">Novo</a>
    </li>
</ul>