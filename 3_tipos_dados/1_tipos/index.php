<?php

    echo 4;
    echo "<br>";

    echo -4;
    echo "<br>";

    if(is_int(4)){ //checa se é inteiro
        echo "é inteiro <br>";
    }

    $a = 1.2; //float
    echo $a;
    echo "<br>";

    if(is_float($a)){ //checa se é um numero decimal
        echo "é decimal <br>";
    }

    //funcoes de is_tipo (parametro) verifica o tipo do dado

    // string nao se diferencia em textos puros em aspas duplas ou simples

    echo "Noemi";
    echo "<br>";
    echo 'Noemi';

    // true e false - boolean 

    // arrays - conjunto, lista (pode ser qualquer tipo de dado) []
    // array associativo - chave e valor ['nome' => 'Matheus', 'idade' => 29]

    print_r(); // Imprima as informações sobre algumas variáveis ​​de uma forma mais legível

    // PHP possui orientaçao a objeto, pode criar classe e objeto
    // -> acessar propriedade ou metodo
