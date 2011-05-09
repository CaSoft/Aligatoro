<h2>Pesquisar</h2>
<form id="form_pesquisa_usuarios" name="form_pesquisa_usuarios" method="post" action="<?php echo site_url(); ?>config/usuarios">
    <fieldset>
        <input type="text" name="texto_pesquisa_usuarios" id="texto_pesquisa_usuarios" value="<?php echo $texto_pesquisa_usuarios; ?>" />
        <select size="1" name="tipo_pesquisa_usuarios" id="tipo_pesquisa_usuarios">
            <option value="login">Login</option>
            <option value="nome">Nome</option>
            <option value="email">E-mail</option>
        </select>
        <input id="botao_pesquisar_usuarios" type="submit" value="Pesquisar" />
    </fieldset>
</form>
<h2>Opções</h2>
<ul>
    <li>
        <a href="<?php echo site_url(); ?>config/usuarios/novo" title="Cadastrar um novo usuário">Novo usuário</a></li>
</ul>