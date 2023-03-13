<h2>Exercício 3</h2>


<?php

    $aluno1=[
        "nome" => "Poliana",
        "notas1" =>7,
        "notas2" => 9
    ] ;

    $aluno2=[
        "nome" => "Murilo",
        "notas1" => 8,
        "notas2" => 5
    ] ;


    $aluno3=[
        "nome" => "André",
        "notas1" =>6,
        "notas2" => 7
    ] ;

    $tabela =[$aluno1,$aluno2,$aluno3];

   
        foreach ($tabela as $key => $value) {
            echo $value["nome"] ."<br>". $value["notas1"]."<br>" . $value["notas2"] ."<br>"."<br>";
        }
        
    
    

?>