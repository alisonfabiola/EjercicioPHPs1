<?php
// Problema de la serie Fibonacci
// Esta función genera los primeros n términos de la serie de Fibonacci
function generarFibonacci($n) {
    $serie = [0, 1]; // Inicia la serie con los dos primeros términos

    for ($i = 2; $i < $n; $i++) {
        $serie[] = $serie[$i - 1] + $serie[$i - 2]; // Cada término es la suma de los dos anteriores
    }

    return array_slice($serie, 0, $n); // Retorna solo los primeros n términos
}

// Prueba:
$fibonacci10 = generarFibonacci(10); // Genera los primeros 10 términos de Fibonacci
print_r($fibonacci10);

$fibonacci5 = generarFibonacci(5); // Genera los primeros 5 términos de Fibonacci
print_r($fibonacci5);


// Problema de números Primos
// Esta función determina si un número dado es primo
function esPrimo($numero) {
    if ($numero < 2) return false; // Los números menores que 2 no son primos

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // Si es divisible por cualquier número entre 2 y su raíz cuadrada, no es primo
        }
    }

    return true; // Es primo si no fue divisible por ningún número anterior
}

// Prueba:
echo esPrimo(23) ? "23 es primo\n" : "23 no es primo\n";
echo esPrimo(10) ? "10 es primo\n" : "10 no es primo\n";


// Problema de Palíndromos
// Esta función verifica si una cadena de texto es un palíndromo
function esPalindromo($cadena) {
    $cadena = strtolower(preg_replace('/[^a-z0-9]/i', '', $cadena)); // Elimina caracteres no alfanuméricos y convierte a minúsculas
    return $cadena === strrev($cadena); // Compara la cadena con su inversa
}

// Prueba:
echo esPalindromo("Oso") ? "'Oso' es palíndromo\n" : "'Oso' no es palíndromo\n";
echo esPalindromo("Casa") ? "'Casa' es palíndromo\n" : "'Casa' no es palíndromo\n";


// Problema de Frecuencia de Caracteres
// Esta función calcula la frecuencia de cada carácter en una cadena de texto
function frecuenciaCaracteres($cadena) {
    $frecuencia = []; // Array asociativo para almacenar las frecuencias

    foreach (str_split($cadena) as $caracter) {
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++; // Incrementa la frecuencia si el carácter ya existe en el array
        } else {
            $frecuencia[$caracter] = 1; // Inicializa la frecuencia en 1 si es la primera aparición
        }
    }

    return $frecuencia;
}

// Prueba:
$frecuencia1 = frecuenciaCaracteres("hola mundo");
print_r($frecuencia1);

$frecuencia2 = frecuenciaCaracteres("PHP es divertido");
print_r($frecuencia2);
?>
