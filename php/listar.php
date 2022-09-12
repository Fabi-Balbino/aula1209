<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabela.css">
    <title>Document</title>
</head>
<body>
    <table border=2>
        <tr>
           <td>NOME</td> 
           <td>RM</td>
           <td>NOTA 1</td>
           <td>NOTA 2</td>
           <td>NOTA 3</td>
           <td>MÉDIA</td>
           <td>FALTAS</td>
           <td colspan=2>Ação</td>
        </tr>
</body>
</html>

<?php

include "conector.php";

$dados = $conn ->query("SELECT * FROM aluno");

while($linha = mysqli_fetch_array($dados)) {

    $nome = $linha['nome'];
    $rm = $linha['rm'];
    $nota1 = $linha['nota1'];
    $nota2 = $linha['nota2'];
    $nota3 = $linha['nota3'];
    $media = $linha['media'];
    $faltas = $linha['faltas'];

    $codigo = <<<SCRIPT

    <tr class='tr'>
    <td>$nome</td>
    <td>$rm</td>
    <td>$nota1</td>
    <td>$nota2</td>
    <td>$nota3</td>
    <td>$media</td>
    <td>$faltas</td>
    <td><a href="excluir_aluno.php?rm=$rm" onclick="return confirm('Quer Realmente Excluir? ')">Excluir</a></td>
    <td>Alterar</td>
    </tr>

    SCRIPT;
    echo "$codigo";
}

echo "</table>";

?>