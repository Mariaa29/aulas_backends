<h2> Matriz </h2>


<?php

    $produto1=[
        "nome" => "Notebook",
        "marca" =>"Dell",
        "preco" => 5000
    ] ;


    $produto2=[
        "nome" => "Câmera",
        "marca" =>"NiKon",
        "preco" => 3000
    ] ;

    $produto3=[
        "nome" => "Smatphone",
        "marca" =>"LG",
        "preco" => 1200
    ] ;

    $tabela = [$produto1, $produto2, $produto3];


    echo"<pre>";
        var_dump($tabela);
    echo"</pre>";

    echo $tabela[1] ["marca"];
    echo"<br><br>";

    //json - Javascript Object Notation 
    //xml

    echo json_encode ($tabela);

?>