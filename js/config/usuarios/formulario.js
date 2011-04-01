$(document).ready( function() {
    $('#form_usuario').validate({
        submitHandler : function(form) {
            if (USUARIO_NOVO) {
                var usuario = new Usuarios_model();
                if (usuario.loginExiste($('#login').val())) {
                    alert('Este login já existe no sistema, por favor, informe outro.');
                    $('#login').focus();
                }
                else {
                    form.submit();
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
            senha : {
                required : USUARIO_NOVO // Variável definida no formulário de usuários
            }
        },
        messages : {
            login : 'Informe o login do usuário',
            nome : 'Informe o nome do usuário',
            email : 'Informe o e-mail do usuário',
            senha : 'Informe a senha que será usada para acessar o sistema'
        }
    });
});