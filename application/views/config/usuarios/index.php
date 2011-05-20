<?php if ($texto_pesquisa_usuarios == '') : ?>
    <h2>Exibindo últimos usuários cadastrados</h2>
<?php else: ?>
    <?php if (count($usuarios) == 0) : ?>
        <h2>Sua pesquisa não retornou resultados</h2>
    <?php elseif (count($usuarios) == 1) : ?>
        <h2>Sua pesquisa retornou 1 resultado</h2>
    <?php else: ?>
        <h2>Sua pesquisa retornou <?php echo count($usuarios); ?> resultados</h2>
    <?php endif; ?>
<?php endif; ?>
<table>
    <thead>
        <tr>
            <th>Login</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th class="alinha_centro">Ativo</th>
            <th class="alinha_direita">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario) : ?>
            <tr>
                <td><?php echo $usuario['login']; ?></td>
                <td><?php echo $usuario['nome']; ?></td>
                <td><?php echo $usuario['email']; ?></td>
                <td class="alinha_centro"><img src="<?php echo base_url(); ?>img/icones/<?php echo ($usuario['ativo'] == '1') ? 'sim' : 'nao'; ?>.png" alt="<?php echo ($usuario['ativo'] == '1') ? 'Sim' : 'Não'; ?>" /></td>
                <td class="alinha_direita">
                    <a href="<?php echo site_url(); ?>config/usuarios/dados/<?php echo $usuario['id']; ?>" title="Ver os dados do usuário">
                        <img src="<?php echo base_url(); ?>img/icones/ver.png" alt="Ver os dados do usuário" />
                    </a>
                    <a href="<?php echo site_url(); ?>config/usuarios/editar/<?php echo $usuario['id']; ?>" title="Editar dados do usuário">
                        <img src="<?php echo base_url(); ?>img/icones/editar.png" alt="Editar dados do usuário" />
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <img src="<?php echo base_url(); ?>img/icones/remocao.png" class="clicavel" onclick="remover_usuario(<?php echo $usuario['id']; ?>);" />
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
