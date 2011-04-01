<h2><?php echo $titulo_pagina; ?></h2>
<table>
    <tr>
        <th>Ativo:</th>
        <td><img src="<?php echo base_url(); ?>img/icones/<?php echo ($usuario['ativo'] == '1') ? 'sim' : 'nao'; ?>.png" alt="<?php echo ($usuario['ativo'] == '1') ? 'Sim' : 'Não'; ?>"</td>
    </tr>
    <tr>
        <th>Login:</th>
        <td><?php echo $usuario['login']; ?></td>
    </tr>
    <tr>
        <th>Nome:</th>
        <td><?php echo $usuario['nome']; ?></td>
    </tr>
    <tr>
        <th>E-mail</th>
        <td><?php echo $usuario['email']; ?></td>
    </tr>
    <tr>
        <th>Registrado em:</th>
        <td><?php echo $usuario['datahora']; ?></td>
    </tr>
</table>