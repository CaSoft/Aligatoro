<h2><?php echo $titulo_pagina; ?></h2>
<form id="form_usuario" method="post" action="<?php echo site_url(); ?>painel/gravar_meus_dados">
    <input type="hidden" id="usuario_id" name="id" value="<?php echo $dados_usuario['id']; ?>" />
    <fieldset>
        <legend>Meus dados</legend>
        <label for="login">* Login:
            <input type="text" name="login" id="login" value="<?php echo $dados_usuario['login']; ?>" readonly="readonly" />
        </label>
        <label for="nome">* Nome:
            <input type="text" name="nome" id="nome" value="<?php echo $dados_usuario['nome']; ?>" />
        </label>
        <label for="email">* E-mail:
            <input type="text" name="email" id="email" value="<?php echo $dados_usuario['email']; ?>" />
        </label>
        <label for="senha">Senha atual:
            <input type="password" name="senha_atual" id="senha_atual" value="" />
        </label>
        <label for="senha">Nova senha:
            <input type="password" name="nova_senha" id="nova_senha" value="" />
        </label>
        <label for="senha">Confirmação da nova senha:
            <input type="password" name="confirmacao_nova_senha" id="confirmacao_nova_senha" value="" />
        </label>
    </fieldset>
    <div class="div_direita">
        <input type="button" value="Cancelar" onclick="window.location = '<?php echo site_url(); ?>'" />
        <input type="submit" value="Enviar" />
    </div>
</form>