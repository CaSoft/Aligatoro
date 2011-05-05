$(document).ready( function() {
    $('.impressao_popup').popupWindow({
        height : 500,
        width : 800
    });
});

function remover_cliente(cliente_id) {
    if (confirm("Você deseja remover este cliente?")) {
        if (confirm("Esta operação não poderá ser desfeita. Tem certeza da remoção?")) {
            window.location = SITE_URL + 'clientes/remover/' + cliente_id;
        }
    }
}