<div class="form_pesquisa">
    <h2>Pesquisar</h2>
    <form id="form_pesquisa_usuarios" name="form_pesquisa_usuarios" method="post" action="<?php echo site_url(); ?>config/usuarios">
        <fieldset>
            <input type="text" name="texto_pesquisa_usuarios" id="texto_pesquisa_usuarios" value="<?php echo $texto_pesquisa_usuarios; ?>" />
            <label class="radios_pesquisa">
                <input type="radio" name="tipo_pesquisa_usuarios" value="login" checked="checked" />Login
            </label>
            <label class="radios_pesquisa">
                <input type="radio" name="tipo_pesquisa_usuarios" value="nome" />Nome
            </label>
            <label class="radios_pesquisa">
                <input type="radio" name="tipo_pesquisa_usuarios" value="email" />E-mail
            </label>

            <br />
            <br />

            <input id="botao_pesquisar_usuarios" type="submit" value="Pesquisar" />
        </fieldset>
    </form>
</div>
<h2>Opções</h2>
<ul>
    <li>
        <a href="<?php echo site_url(); ?>config/usuarios/novo" title="Cadastrar um novo usuário">Novo usuário</a></li>
</ul>
