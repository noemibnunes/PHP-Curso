<?php

    // mysqli = extensao de pho para conectar ao banco mysql, é mais rápido que o PDO.

    // PDO = API para conectar ao BD não limitado ao mysql, é mais lento que o mysqli.

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);
    //mysqli = conectar ao mysql

    //connect_error() = verifica se houve algum erro na conexao 

    $sql = "SELECT * FROM items";
    
    $result = $conn->query($sql);

    print_r($result);

    //fetch_assoc() - um resultado

    //fetch_all() - varios resultado

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // PDO
