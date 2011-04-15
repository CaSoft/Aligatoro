<h2><?php echo $titulo_pagina; ?></h2>
<form id="form_usuario" method="post" action="<?php echo site_url(); ?>config/usuarios/gravar">
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>" />
    <fieldset>
        <legend>Dados do usuário</legend>
        <label for="ativo">Ativo:
            <input type="checkbox" name="ativo" id="ativo" value="1" <?php echo ($usuario['ativo'] == '1') ? 'checked="checked"' : ''; ?> />
        </label>
        <label for="login">* Login:
            <input type="text" name="login" id="login" value="<?php echo $usuario['login']; ?>" <?php echo ($usuario['login'] != '') ? 'readonly="readonly"' : ''; ?> />
        </label>
        <label for="nome">* Nome:
            <input type="text" name="nome" id="nome" value="<?php echo $usuario['nome']; ?>" />
        </label>
        <label for="email">* E-mail:
            <input type="text" name="email" id="email" value="<?php echo $usuario['email']; ?>" />
        </label>
        <label for="senha"><?php echo ($usuario['id'] != '0') ? '* ' : ''; ?>Senha:
            <input type="password" name="senha" id="senha" value="" />
        </label>
    </fieldset>
    <div class="div_direita">
        <input type="button" value="Cancelar" onclick="window.location = '<?php echo site_url(); echo ($usuario['id'] != '0') ? 'config/usuarios/dados/'.$usuario['id'] : 'config/usuarios'; ?>'" />
        <input type="submit" value="Enviar" />
    </div>
</form>
<script type="text/javascript">
    var USUARIO_NOVO = <?php echo ($usuario['id'] != '0') ? 'false' : 'true'; ?>;
</script>