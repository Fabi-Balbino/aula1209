<?php
include "conector.php";

$rm = $_POST['rm'];
$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$faltas = $_POST['faltas'];
$media = ($nota1+$nota2+$nota3) / 3;

$testar = $conn->query("SELECT * FROM aluno WHERE rm = '$rm' ");
$check = mysqli_num_rows($testar);

if($check == 1){
    echo"RM já cadastrado!
    <br><br>
    Não lembra da senha <a href='formulario.html'>clique aqui</a>";
}

else{

    $conn ->query("INSERT INTO aluno (rm, nome, nota1, nota2, nota3, media, faltas) VALUES ('$rm', '$nome', '$nota1', '$nota2', '$nota3', '$media', '$faltas')");
    echo "<br>Dados Salvos!";
    header("Refresh: 2; url=formulario.html");
}

//header("location: formulario.html");

?>