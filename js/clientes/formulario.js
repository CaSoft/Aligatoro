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
    
    $('#cep').mask('99999-999');

    // Adicionando o editor WYSIWYG no campo de observações
    $('#observacoes').tinymce({
        script_url : BASE_URL + 'js/tinymce/jscripts/tiny_mce/tiny_mce.js',

        // General options
        theme : "advanced",
        plugins : "style",

        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,forecolor,backcolor,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,fontsizeselect",
        theme_advanced_buttons2 : "",
        theme_advanced_buttons3 : "",
        theme_advanced_buttons4 : "",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        width : "720",

        height : "200",

        language : "pt"
    });
});