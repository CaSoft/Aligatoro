<form id="form_cliente" method="post" action="<?php echo site_url(); ?>clientes/gravar">
    <div class="div_direita">
        <input type="submit" value="Enviar" />
    </div>
    <input type="hidden" name="id" value="" />
    <fieldset>
        <legend>Dados básicos</legend>
        <label for="nome">Nome:
            <input type="text" name="nome" id="nome" />
        </label>
        <label for="telefone1">Telefone:
            <input type="text" name="telefone1" id="telefone1" class="fone" />
        </label>
        <label for="email">E-mail:
            <input type="text" name="email" id="email" />
        </label>
    </fieldset>
    <div class="div_direita">
        <input type="button" id="btn_exibir_endereco" value="Exibir endereço" />
        <input type="button" id="btn_exibir_detalhes" value="Exibir detalhes" />
    </div>
    <fieldset id="campos_endereco" style="display: none;">
        <legend>Endereço</legend>
        <label for="contato">Contato:
            <input type="text" name="contato" id="contato" maxlength="100" />
        </label>
        <label for="telefone2">Telefone alternativo:
            <input type="text" name="telefone2" id="telefone2" class="fone" maxlength="13" />
        </label>
        <label for="celular">Celular:
            <input type="text" name="celular" id="celular" class="fone" maxlength="13" />
        </label>
        <label for="logradouro">Logradouro:
            <input type="text" name="logradouro" id="logradouro" maxlength="140" />
        </label>
        <label for="numero">Número:
            <input type="text" name="numero" id="numero" maxlength="10" />
        </label>
        <label for="complemento">Complemento:
            <input type="text" name="complemento" id="complemento" maxlength="120" />
        </label>
        <label for="bairro">Bairro:
            <input type="text" name="bairro" id="bairro" maxlength="120" />
        </label>
        <label for="cidade">Cidade:
            <input type="text" name="cidade" id="cidade" maxlength="120" />
        </label>
        <label for="estado">Estado:
            <input type="text" name="estado" id="estado" maxlength="2" />
        </label>
        <label for="cep">CEP:
            <input type="text" name="cep" id="cep" maxlength="9" />
        </label>
    </fieldset>
    <fieldset id="campos_detalhes" style="display: none;">
        <legend>Detalhes</legend>
        <label for="razao_social">Razão Social:
            <input type="text" name="razao_social" id="razao_social" maxlength="100" />
        </label>
        <label for="cpf">CPF:
            <input type="text" name="cpf" id="cpf" maxlength="14" />
        </label>
        <label for="cnpj">CNPJ:
            <input type="text" name="cnpj" id="cnpj" maxlength="18" />
        </label>
        <label for="documento">Documento:
            <input type="text" name="documento" id="documento" maxlength="20" />
        </label>
    </fieldset>
    <div class="div_direita">
        <input type="submit" value="Enviar" />
    </div>
</form>