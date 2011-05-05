/**
 * Arquivo com a model dos usuários
 *
 * @require jQuery 1.5
 */

Usuarios_model = function() {
    this.nome = "Usuamos_model";
};

/**
 * Esta função verifica se um login já existe no sistema
 *
 * @param login string
 * @return boolean
 */
Usuarios_model.prototype.loginExiste = function(login) {
    var dados = {
        'login' : login
    }

    var existe = $.ajax({
        url : SITE_URL + 'ajax/usuarios/verificar_login',
        type : 'POST',
        data : $.param(dados),
        dataType : 'text',
        async : false
    }).responseText;

    if (existe == '1') {
        return true;
    }
    else {
        return false;
    }
};

/**
 * Verificação da senha atual de um usuário
 *
 * Só funciona com o usuário já autenticado!
 *
 * @param id integer
 * @param senha string
 * @return boolean
 */
Usuarios_model.prototype.confereSenha = function(id, senha) {
    var dados = {
        'id' : id,
        'senha' : senha
    }

    var senha_valida = $.ajax({
        url : SITE_URL + 'ajax/usuarios/confere_senha',
        type : 'POST',
        data : $.param(dados),
        dataType : 'text',
        async : false
    }).responseText;

    if (senha_valida == '0') {
        return true;
    }
    else {
        return false;
    }
};