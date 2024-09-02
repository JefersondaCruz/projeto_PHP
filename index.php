<?php    

$a =readline("1 - logar  \n  2 - registrar: "); 

// LOGAR 
function logar () {
    global $usario, $password;
    $usuario = readline ("Digite seu nome de usuario: ");
    $password = readline ("Digite sua senha: ");
    
}

//REGISTRAR
function registrar() {
    $array_usuario = [$reg_usuario = readline ("Digite o usuario para ser cadastrado: ")];
    $reg_password = readline ( "Digite sua senha para ser cadastrada: ");
}


if ($a == 1) {

    logar();
    echo "Você está logado \n ";
    

} else if ($a == 2) {

    registrar();
    echo "Você foi registrado \n";
    

} else  {
    echo "Erro, somente 1 e 2 sao escolhas";
}


