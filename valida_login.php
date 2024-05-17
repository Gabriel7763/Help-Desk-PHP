<?php 
    //verificando se a autenticação foi relizada
    $usuario_autenticado = false;
    //usuarios do sistema
    $usuarios = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'aaaa')
    );
    foreach($usuarios as $user){
        if ($user['email'] === $_POST['email'] && $user['senha'] === $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){

    }else{
        //Enviando o usuário para a página de login com mensagem de erro
        header('Location: index.php?login=erro');
    }
?>