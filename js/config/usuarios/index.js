function remover_usuario(usuario_id) {
    if (confirm("Você deseja remover este usuário?")) {
        if (confirm("Esta operação não poderá ser desfeita. Tem certeza da remoção?")) {
            window.location = SITE_URL + 'config/usuarios/remover/' + usuario_id;
        }
    }
}