/**
 * Script para a página de dados dos clientes
 *
 * Este sscript também é usado no formulário de clientes
 *
 * @require jQuery > 1.5
 */

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
});