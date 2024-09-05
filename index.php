<?php

// VARIAVEIS
$log_usuarios = [];

// Função para fazer login
function logar() {
    global $log_usuarios; 
    $usuario = readline("Digite seu nome de usuario: ");
    $password = readline("Digite sua senha: ");


    // Verificar se o usuário está registrado
    foreach ($log_usuarios as $user) {
        if ($user['nomeUsuario'] === $usuario && $user['senha'] === $password) {
            echo "Login bem-sucedido\n";
            return true;
        }
    }
    echo "Nome do usuario ou senha inválido \n";
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
}


$Opcao_inicial = readline("1 - logar\n2 - registrar\n");

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

while ($log_usuarios == true) {
    
}

