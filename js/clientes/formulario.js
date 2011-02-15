var campos_endereco = false;
var campos_detalhes = false;

$(document).ready( function() {
    $('#btn_exibir_endereco').click( function() {
        if (! campos_endereco) {
            $('#campos_endereco').show('slow');
            $('#btn_exibir_endereco').val('Esconder endereço');
            campos_endereco = true;
        }
        else {
            $('#campos_endereco').hide('slow');
            $('#btn_exibir_endereco').val('Exibir endereço');
            campos_endereco = false;
        }
    });

    $('#btn_exibir_detalhes').click( function() {
        if (! campos_detalhes) {
            $('#campos_detalhes').show('slow');
            $('#btn_exibir_detalhes').val('Esconder detalhes');
            campos_detalhes = true;
        }
        else {
            $('#campos_detalhes').hide('slow');
            $('#btn_exibir_detalhes').val('Exibir detalhes');
            campos_detalhes = false;
        }
    });

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