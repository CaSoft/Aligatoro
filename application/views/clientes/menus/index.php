<div class="form_pesquisa">
    <h2>Pesquisar</h2>
    <form id="form_pesquisa_clientes" name="form_pesquisa_clientes" method="post" action="<?php echo site_url(); ?>clientes">
        <fieldset>
            <input type="text" name="texto_pesquisa_clientes" id="texto_pesquisa_clientes" value="<?php echo $texto_pesquisa_clientes; ?>" />
            <label class="radios_pesquisa">
                <input type="radio" name="tipo_pesquisa_clientes" value="nome" checked="checked" />Nome
            </label>

            <label class="radios_pesquisa">
                <input type="radio" name="tipo_pesquisa_clientes" value="telefone" />Telefone
            </label>

            <label class="radios_pesquisa">
                <input type="radio" name="tipo_pesquisa_clientes" value="email" />E-mail
            </label>

            <label class="radios_pesquisa">
                <input type="radio" name="tipo_pesquisa_clientes" value="cidade" />Cidade
            </label>
         
            <br />
            <br />

            <input id="botao_pesquisar_clientes" type="submit" value="Pesquisar" />
        </fieldset>
    </form>
</div>
<h2>Opções</h2>
<ul>
    <li>
        <a href="<?php echo site_url(); ?>clientes/novo" title="Cadastrar novo cliente">Novo cliente</a>
    </li>
</ul>
