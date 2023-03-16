<?php

    $aluno1=[
        "nome" => "Poliana Silvera",
        "notas1" =>7,
        "notas2" => 9
    ] ;

    $aluno2=[
        "nome" => "Murilo Alexandre",
        "notas1" => 8,
        "notas2" => 5
    ] ;


    $aluno3=[
        "nome" => "André Felipe",
        "notas1" =>6,
        "notas2" => 7
    ] ;

    $aluno4=[
        "nome" => "Lavinia Sandy",
        "notas1" =>8,
        "notas2" => 9
    ] ;


    $tabela =[$aluno1,$aluno2,$aluno3,$aluno4];

    //var_dump($tabela); 

     //print_r($tabela);
     echo json_encode($tabela);

?>