<?php 
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    
    //montando o texto do arquivo
    $texto = implode('| ', $_POST) . PHP_EOL;
    //abrind o arquivo
    $arquivo = fopen('arquivo.txt', 'a');
    //escrevendo o arquivo
    fwrite($arquivo, $texto);
    //fechando o arquivo
    fclose($arquivo);
    header('Location: abrir_chamado.php');
?>