<h2><?php echo $titulo_pagina; ?></h2>
<form id="form_cliente" method="post" action="<?php echo site_url(); ?>clientes/gravar">
    <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>" />
    <div class="div_direita">
        <input type="button" value="Cancelar" onclick="window.location = '<?php echo site_url(); echo ($cliente['id'] != '0') ? 'clientes/dados/'.$cliente['id'] : 'clientes'; ?>'" />
        <input type="submit" value="Enviar" />
    </div>
    <div id="abas">
        <ul>
            <li>
                <a href="#dados_basicos">Dados básicos</a>
            </li>
            <li>
                <a href="#dados_endereco">Endereço</a>
            </li>
            <li>
                <a href="#dados_detalhes">Detalhes</a>
            </li>
        </ul>
        <div id="dados_basicos">
            <fieldset>
                <legend>Dados básicos</legend>
                <label for="nome">* Nome:
                    <input type="text" name="nome" id="nome" value="<?php echo $cliente['nome']; ?>" />
                </label>
                <label for="telefone1">Telefone:
                    <input type="text" name="telefone1" id="telefone1" class="fone" value="<?php echo $cliente['telefone1']; ?>" />
                </label>
                <label for="email">E-mail:
                    <input type="text" name="email" id="email" value="<?php echo $cliente['email']; ?>" />
                </label>
                <label for="observacoes">Observações:
                    <textarea name="observacoes" id="observacoes" rows="" cols=""><?php echo $cliente['observacoes']; ?></textarea>
                </label>
            </fieldset>
        </div>
        <div id="dados_endereco">
            <fieldset>
                <legend>Endereço</legend>
                <label for="contato">Contato:
                    <input type="text" name="contato" id="contato" maxlength="100" value="<?php echo $cliente['contato']; ?>" />
                </label>
                <label for="telefone2">Telefone alternativo:
                    <input type="text" name="telefone2" id="telefone2" class="fone" maxlength="13" value="<?php echo $cliente['telefone2']; ?>" />
                </label>
                <label for="celular">Celular:
                    <input type="text" name="celular" id="celular" class="fone" maxlength="13" value="<?php echo $cliente['celular']; ?>" />
                </label>
                <label for="logradouro">Logradouro:
                    <input type="text" name="logradouro" id="logradouro" maxlength="140" value="<?php echo $cliente['logradouro']; ?>" />
                </label>
                <label for="numero">Número:
                    <input type="text" name="numero" id="numero" maxlength="10" value="<?php echo $cliente['numero']; ?>" />
                </label>
                <label for="complemento">Complemento:
                    <input type="text" name="complemento" id="complemento" maxlength="120" value="<?php echo $cliente['complemento']; ?>" />
                </label>
                <label for="bairro">Bairro:
                    <input type="text" name="bairro" id="bairro" maxlength="120" value="<?php echo $cliente['bairro']; ?>" />
                </label>
                <label for="cidade">Cidade:
                    <input type="text" name="cidade" id="cidade" maxlength="120" value="<?php echo $cliente['cidade']; ?>" />
                </label>
                <label for="estado">Estado:
                    <input type="text" name="estado" id="estado" maxlength="2" value="<?php echo $cliente['estado']; ?>" />
                </label>
                <label for="cep">CEP:
                    <input type="text" name="cep" id="cep" maxlength="9" value="<?php echo $cliente['cep']; ?>" />
                </label>
            </fieldset>
        </div>
        <div id="dados_detalhes">
            <fieldset>
                <legend>Detalhes</legend>
                <label for="razao_social">Razão Social:
                    <input type="text" name="razao_social" id="razao_social" maxlength="100" value="<?php echo $cliente['razao_social']; ?>" />
                </label>
                <label for="cpf">CPF:
                    <input type="text" name="cpf" id="cpf" maxlength="14" value="<?php echo $cliente['cpf']; ?>" />
                </label>
                <label for="cnpj">CNPJ:
                    <input type="text" name="cnpj" id="cnpj" maxlength="18" value="<?php echo $cliente['cnpj']; ?>" />
                </label>
                <label for="documento">Outro documento:
                    <input type="text" name="documento" id="documento" maxlength="20" value="<?php echo $cliente['documento']; ?>" />
                </label>
            </fieldset>
        </div>
    </div><!-- abas -->
</form>
