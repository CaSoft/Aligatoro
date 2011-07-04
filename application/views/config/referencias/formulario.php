<h2><?php echo $titulo_pagina; ?></h2>
<form id="form_referencia" method="post" action="<?php echo site_url(); ?>config/referencias/gravar">
    <input type="hidden" name="form_referencia_id" value="<?php echo $referencia['id']; ?>" />
    <div class="div_direita">
        <input type="button" value="Cancelar" onclick="window.location = '<?php echo site_url(); ?>config/referencias'" />
        <input type="submit" value="Enviar" />
    </div>
    <fieldset>
        <label for="form_referencia_ativo">Ativo:
            <input type="checkbox" name="form_referencia_ativo" value="1" id="form_referencia_ativo" />
        </label>
        <label for="form_referencia_nome">* Nome:
            <input type="text" name="form_referencia_nome" value="<?php echo $referencia['nome']; ?>" id="form_referencia_nome" />
        </label>
    </fieldset>
</form>
