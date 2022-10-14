<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dados Cadastrados</h1>
    <tr>
        <td><strong>NOME</strong></td>
        <td><strong>EMAIL</strong></td>
        <td><strong>STATUS</strong></td>
    </tr>
        <?php
        include("conecta.php");
        $seleciona=mysqli_query($conexao, "select * from alunos.aluno");
        while($campo=mysqli_fetch_array($seleciona)){?>
        <tr>
            <td><?=$campo["nome"]?></td>
            <td><?=$campo["email"]?></td>
            <td><?=$campo["stts"]?></td>

            <td align="center"><a href="#">i class="fa fa-edit"></i></a></td>
            <td align="center"><a href="#" onClick="verifica"(<?-$campo["id"]?> class="fa fa-trash"></i></a></td>
        </tr>
        <?php }?> </table>
        <a href="cadastro.php">Novo Cadastro</a><br/><br/>
        )
</body>
</html>