<h2><?php echo $titulo_pagina; ?></h2>
<table>
    <tr>
        <th colspan="2" class="subtitulo">Dados Básicos</th>
    </tr>
    <tr>
        <th>Nome:</th>
        <td><?php echo $cliente['nome']; ?></td>
    </tr>
    <tr>
        <th>Telefone:</th>
        <td><?php echo $cliente['telefone1']; ?></td>
    </tr>
    <tr>
        <th>E-mail</th>
        <td><?php echo $cliente['email']; ?></td>
    </tr>
    <tr>
        <th>Observações</th>
        <td><?php echo nl2br($cliente['observacoes']); ?></td>
    </tr>
    <tr>
        <th colspan="2" class="subtitulo">Endereço</th>
    </tr>
    <tr>
        <th>Contato:</th>
        <td><?php echo $cliente['contato']; ?></td>
    </tr>
    <tr>
        <th>Telefone alternativo:</th>
        <td><?php echo $cliente['telefone2']; ?></td>
    </tr>
    <tr>
        <th>Celular:</th>
        <td><?php echo $cliente['celular']; ?></td>
    </tr>
    <tr>
        <th>Logradouro:</th>
        <td><?php echo $cliente['logradouro']; ?></td>
    </tr>
    <tr>
        <th>Número:</th>
        <td><?php echo $cliente['numero']; ?></td>
    </tr>
    <tr>
        <th>Complemento:</th>
        <td><?php echo $cliente['complemento']; ?></td>
    </tr>
    <tr>
        <th>Bairro:</th>
        <td><?php echo $cliente['bairro']; ?></td>
    </tr>
    <tr>
        <th>Cidade:</th>
        <td><?php echo $cliente['cidade']; ?></td>
    </tr>
    <tr>
        <th>Estado:</th>
        <td><?php echo $cliente['estado']; ?></td>
    </tr>
    <tr>
        <th>CEP:</th>
        <td><?php echo $cliente['cep']; ?></td>
    </tr>
    <tr>
        <th colspan="2" class="subtitulo">Detalhes</th>
    </tr>
    <tr>
        <th>Razão Social</th>
        <td><?php echo $cliente['razao_social']; ?></td>
    </tr>
    <tr>
        <th>CPF:</th>
        <td><?php echo $cliente['cpf']; ?></td>
    </tr>
    <tr>
        <th>CNPJ:</th>
        <td><?php echo $cliente['cnpj']; ?></td>
    </tr>
    <tr>
        <th>Documento:</th>
        <td><?php echo $cliente['documento']; ?></td>
    </tr>
</table>