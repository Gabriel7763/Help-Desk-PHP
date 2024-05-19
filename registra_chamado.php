<?php 
    session_start();
    
    //montando o texto do arquivo
    
    $texto = $_SESSION['id'] . '|' . implode('|', $_POST) . PHP_EOL;
    //abrind o arquivo
    $arquivo = fopen('arquivo.txt', 'a');
    //escrevendo o arquivo
    fwrite($arquivo, $texto);
    //fechando o arquivo
    fclose($arquivo);
    header('Location: abrir_chamado.php');
?>