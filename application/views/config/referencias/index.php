<table cellspacing="0">
    <thead>
        <tr>
            <th>Referência</th>
            <th>Ativo</th>
            <th class="alinha_direita">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($referencias as $referencia) : ?>
            <tr>
                <td><?php echo $referencia['nome']; ?></td>
                <td><img src="<?php echo base_url(); ?>img/icones/<?php echo ($referencia['ativo'] == 1) ? 'sim' : 'nao'; ?>.png" alt="<?php echo ($referencia['ativo'] == 1) ? 'Sim' : 'Não'; ?>" />
                </td>
                <td class="alinha_direita">
                    <a href="<?php echo site_url(); ?>config/referencias/editar/<?php echo $referencia['id']; ?>" title="Editar referência">
                        <img src="<?php echo base_url(); ?>img/icones/editar.png" alt="Editar referência" />
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <img src="<?php echo base_url(); ?>img/icones/remocao.png" class="clicavel" onclick="remover_referencia(<?php echo $referencia['id']; ?>);" />
                </td>
            </tr>
        <?php endforeach; ?> 
    </tbody>
</table>
