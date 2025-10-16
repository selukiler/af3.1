<?php

//Problema 1: Calculadora de Descuentos Crea una función calcularDescuento($precio, $categoria)
//que aplique diferentes descuentos según la categoría de un producto:
function calcularDescuento($precio, $categoria)
{
    if ($categoria=='electronica'){
        $desc=$precio*0.15;
        $precio=$precio-$desc;
    }

    if ($categoria=='ropa'){
        $desc=$precio*0.10;
        $precio=$precio-$desc;
    }

    if ($categoria=='electronica'){
    $desc=$precio*0.05;
    $precio=$precio-$desc;
    }
    echo $precio;
    return $precio;
}

calcularDescuento(78,'ropa');
//Problema 2: El Juego "FizzBuzz" Crea una función fizzBuzz($numero)
//que reciba un número y devuelva:
function fizzBuzz($numero)
{
    if($numero%3==0&&$numero%5==0){
        echo 'FizzBuzz';
        return 'FizzBuzz';
    }
    else if($numero%3==0){
        echo 'Fizz';
        return 'Fizz';
    }
    else if($numero%5==0){
        echo 'Buzz';
        return 'Buzz';
    }
    else{
        echo $numero;
        return $numero;
    }
}

$numerin=25;
fizzBuzz($numerin);

//Problema 3: Validador de Contraseña Crea una función validarContraseña($pass)
//que verifique la fortaleza de una contraseña y devuelva un string:
function validarContrasena($pass)
{
  if(strlen($pass)<8){
      echo 'Debil';
      return 'Debil';
  }
  else if (strlen($pass)>8&&preg_match('/[A-Z]/', $pass)&&preg_match('/[0-9]/', $pass)) {
      echo 'Alta';
      return 'Alta';
  }

  else if(strlen($pass)>8){
      echo 'Media';
      return 'Media';
  }
}
$passw='ehcboH5';
validarContrasena($passw);

//Problema 4: Encontrar el Valor Máximo Crea una función encontrarMaximo($array)
//que reciba un array de números y devuelva el número más alto del array
//1 q   q   32sin usar la función max() de PHP
function encontrarMaximo($array)
{
    $max=0;
    for ($i=0; $i < count($array); $i++) {
        if($array[$i]>$max){
            $max=$array[$i];
        }
    }
    echo $max;
    return $max;
}
$arra=[10, 5, 20, 1, 50, 7, 33, 12, 45, 9];
encontrarMaximo($arra);

//Problema 5: Filtrar Usuarios por Criterio Dado el siguiente array de usuarios:
function filtrarUsuario($usuarios)
{
    $users=[];
    foreach ($usuarios as $usuario) {
        if ($usuario['edad']>18&&$usuario['activo']==true) {
            $users[]=$usuario;
            print_r($usuario) ;
        }
    }

    return $users;
}

$usuarios = [
    ['nombre' => 'Ana', 'edad' => 25, 'activo' => true],
    ['nombre' => 'Juan', 'edad' => 17, 'activo' => true],
    ['nombre' => 'Pedro', 'edad' => 35, 'activo' => false],
    ['nombre' => 'Sofía', 'edad' => 22, 'activo' => true]
];

filtrarUsuario($usuarios);