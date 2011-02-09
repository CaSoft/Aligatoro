<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente) : ?>
            <tr>
                <td><?php echo $cliente['nome']; ?></td>
                <td><?php echo $cliente['telefone1']; ?></td>
                <td><?php echo $cliente['email']; ?></td>
                <td></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>