<?php

    
// VARIAVEIS
$log_usuarios = [];
$usuario_logado = null; // nao precisar ponhar valor



// Função para fazer login
function logar() {
    global $log_usuarios, $usuario_logado; 
    $usuario = readline("Digite seu nome de usuario: ");
    $password = readline("Digite sua senha: ");


    // Verificar se o usuário está registrado
    foreach ($log_usuarios as $user) {
        if ($user['nomeUsuario'] === $usuario && $user['senha'] === $password) {
            $usuario_logado = $usuario;
            echo "Login bem-sucedido\n";
            return true;
        } 
    }
    echo "Nome do usuario ou senha inválido \n";
    return false;
}

// Função para registrar um novo usuário
function registrar($reg_usuario, $reg_password) {
    global $log_usuarios; 

    // Verificar se o usuário já está registrado
    foreach ($log_usuarios as $user) {
        if ($user['nomeUsuario'] === $reg_usuario) {
            echo "Usuário já registrado\n";
            return;
        }
    }

    // Adicionar novo usuário ao array
    $log_usuarios[] = ['nomeUsuario' => $reg_usuario, 'senha' => $reg_password];
    echo "Usuário registrado com sucesso\n";
    print_r($log_usuarios);
}

    // função para deslogar
    function deslogar () {
        global $usuario_logado;
        if($usuario_logado) {
            $usuario_logado = null;
            echo "Deslogado com sucesso \n";
        } else {
            echo "Nenhum usúario está logado \n";
        }
    }

while (true) {

    if($usuario_logado) {
        echo "\n Você esta logado como $usuario_logado \n";
        echo "1 - DESLOGAR \n2 - ENTRA SISTEMA DE VENDAS \n3 - Sair \n";
        $opcao_inicial = readline("Escolha uma opção ");
    

    if ($opcao_inicial == 1) {
        deslogar();
    } else if ( $Opcao_inicial == 2) {
        echo "PUXAR FUNÇÃO DE VENDAS AQUI";
        break;
    } else if ( $Opcao_inicial == 3) {
        echo "Saindo.. \n";
    } else {
        echo "comando errado";
    }
} else {

    echo "\n1 - LOGAR\n2 - Registrar\n";
    $Opcao_inicial = readline("Escolha uma opção: ");

// Processar a escolha do usuário
if ($Opcao_inicial == 1) {
    logar();
} else if ($Opcao_inicial == 2) {
    $reg_usuario = readline("Digite o usuário para ser cadastrado: ");
    $reg_password = readline("Digite sua senha para ser cadastrada: ");
    registrar($reg_usuario, $reg_password);
} else {
    echo "Erro, somente 1 e 2 são escolhas válidas\n";
}

}

}