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
        <br>
    </tr>
        <?php
        include("conecta.php");
        $seleciona=mysqli_query($conexao, "select * from alunos.aluno");
        while($campo=mysqli_fetch_array($seleciona)){?>
        <tr>
            <td><?=$campo["nome"]?></td><br>
            <td><?=$campo["email"]?></td><br>
            <td><?=$campo["stts"]?></td><br>

            <td align="center"><a href="#"></i></a></td><br>
            <td align="center"><a href="#" onClick="verifica"(<?-$campo["id"]?> </i></a></td>
        </tr>
        <?php }?> </table>
        <a href="cadastro.php">NOVO CADASTRO</a><br/><br/>
        
</body>
</html>