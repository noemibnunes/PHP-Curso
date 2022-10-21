<?php

$array = [];

$array[0] = 23;
$array[1] = 25;

// soma ao valor que ja tem no indice
$array[0] += 7;

$array[] = 25;

$arrayAssociativo = [];

$arrayAssociativo["carro"] = "BMW";

$arr = range(1, 10); // cria array de forma rapida

count($arr); // conta quantos elementos tem no array

$arr[
    [1,2,4],
    [4,5,6]
]; // array multidimensional

$arr[1][0] // acessar segundo array, seu primeiro indice

$pessoa = ["Noemi", 21];

list($nome, $idade) = $pessoa;

array_slice($arr, 1, 3); // pega os elementos do indice 1 a 3

array_chunk($arr, 4); // divide o array em arrays menores

$carro = [
    "marca" => "BWM"
]
array_keys($carro); // exibe as chaves do array
 
array_values($carro); // exibe os valores das chaves

array_key_exists("marca", $carro); // verifica se existe essa chave no array

array_splice($arr, 2, 1); // remove elementos do array

extract($carro); // criar variaveis, o nome da chave será a variavel 

$nome = "Noemi";

$clientes = compact("nome"); // cria um array a partir de uma variavel

// foreach - acessar chave e valor

//array_reduce($arr, funcao) // reduz o array em um unico valor

in_array(2, $arr); // verifica se o item passado no parametro esta no array

sort($arr); // ordenar array do menor para o maior

rsort($arr); // ordena array do maior para o menor

asort($carro); // ordena array pelo valor da chave (crescente)

arsort($carro); // ordena array pelo valor da chave (decrescente)

ksort($carro); // ordena array pela chave (crescente)

krsort($carro); // ordena array pela chave (decrescente)

array_reverse($arr); // array invertido

shuffle($arr); // ordem aleatoria de ordenacao

// array_sum // soma todos elementos do arrays

// array_merge // unir arrays

// array_diff // diferenca entre arrays