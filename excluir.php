<?php
    include("conecta.php");
    $matricula = $_GET["M"];


    $comando = $pdo->prepare("DELETE FROM alunos WHERE matrícula=$matricula");
    $resultado = $comando->execute();

    // Para voltar no formulario:
    header("Location: cadastro.html");    
    
?>
