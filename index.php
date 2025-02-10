<?php
    include "conexao.php";
    $consulta = $conexao->query("SELECT * FROM pessoa");
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Pessoas</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <a href="formCadastrar.php">Cadastrar uma nova pessoa</a>

    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th colspan="2">Acões</th>
        </tr>


        <?php while($linha = $consulta->fetch()): ?>

        <tr>
            <?php
                //Quando não estiver dentro de aspas duplas usasse aspas simples
            ?>
            
            <td><?php echo $linha['nome'] ?></td>
            <td><?php echo $linha['idade'] ?></td>
            <td><?php echo "<a href='formAlterar.php?codigo=$linha[codigo]&nome=$linha[nome]&idade=$linha[idade]'>Alterar</a>"?></td>
            <td><?php echo "<a href='formExcluir.php?codigo=$linha[codigo]&nome=$linha[nome]&idade=$linha[idade]'>Excluir</a>"?></td>
        </tr>

        <?php endwhile ?>

        
    </table>
    
</body>
</html>