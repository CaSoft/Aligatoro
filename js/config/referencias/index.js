/**
 * index.js
 *
 * JavaScript para a index de configuração das referências
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 */

function remover_referencia(referencia_id) {
    if (! isNaN(referencia_id)) {
        if (confirm("Você deseja remover esta referência?")) {
            if (confirm("Esta operação não podera ser defeita. Tem certeza?")) {
                window.location = SITE_URL + 'config/referencias/remover/' +referencia_id;
            }
        }
    }
}
