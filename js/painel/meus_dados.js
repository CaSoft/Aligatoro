/**
 * Script para o formulário de alteração dos dados do usuário (Meus Dados)
 *
 * @require jQuery > 1.5
 */
$(document).ready( function() {
    $('#form_usuario').validate({
        submitHandler : function(form) {
            if ($('#senha_atual').val() != '') {
                var usuario = new Usuarios_model();
                if (usuario.confereSenha($('#usuario_id').val(), $('#senha_atual').val())) {
                    form.submit();
                }
                else {
                    alert('A senha atual não é válida!');
                    $('#senha_atual').val('').focus();
                }
            }
            else {
                form.submit();
            }
        },
        rules : {
            login : 'required',
            nome : 'required',
            email : {
                required : true,
                email : true
            },
            senha_atual : {
                required : function() {
                    if ($('#nova_senha').val() != '') {
                        return true;
                    }
                    else {
                        return false;
                    }
                }
            },
            confirmacao_nova_senha : {
                equalTo : '#nova_senha'
            }
        },
        messages : {
            login : 'Informe o login do usuário',
            nome : 'Informe o nome do usuário',
            email : 'Informe o e-mail do usuário',
            senha_atual : 'Confirme a sua senha atual',
            confirmacao_nova_senha : 'As senhas não são iguais!'
        }
    });
});