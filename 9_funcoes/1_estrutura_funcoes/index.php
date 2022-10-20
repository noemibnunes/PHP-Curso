<?php

    function teste(){
        // codigo da funcao    
    }

    //chamar funcao
    teste();

    // funcao com parametros
    function teste($parametro, $parametro2){
        // codigo da funcao    
    }

    // retorno de funcao
    function teste($num){
        return $num;    
    }

    // funcao com valor pre definido
    function teste($num = "2"){
        return $num;    
    }

    //func_get_arg = retorna uma lista com os argumentos de uma funcao
    //func_num_args = retorna o numero de argumento de uma funcao

     // funcao com multiplo return de dados
     function teste(){
        return ["nome", 10, true];    
    }

    //var_dump = ele imprime de forma mais legivel um array, diz o tipo de dados e afins