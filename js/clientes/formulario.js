/**
 * Formulário de clientes
 */

$(document).ready( function() {
    // Validação do formulário de clientes, o único campo exigido é Nome
    $('#form_cliente').validate({
        rules : {
            nome : {
                required : true
            },
            email : {
                email : true
            },
            cpf : {
                cpf : function() {
                    if ($.trim($('#cpf').val()) == '') {
                        return false;
                    }
                    else {
                        return true;
                    }
                }
            },
            cnpj : {
                cnpj : function() {
                    if ($.trim($('#cnpj').val()) == '') {
                        return false;
                    }
                    else {
                        return true;
                    }
                }
            }
        },
        messages : {
            nome : 'Digite o nome do cliente.',
            email : 'Digite um endereço de e-mail, ou deixe em branco',
            cpf : 'Digite um CPF válido, ou deixe em branco.',
            cnpj : 'Digite um CNPJ válido, ou deixe em branco.'
        }
    });

    // Adicionando as máscaras
    $('#cpf').mask('999.999.999-99');
    $('#cnpj').mask('99.999.999/9999-99');
});