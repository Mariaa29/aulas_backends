<h2>Exercício 1</h2>
<p>
    Crie um vetor, como representado abaixo:
    <pre>
        +---------+
        |Murilo   | 
        +---------+
        |4        |
        +---------+
        |3        |
        +---------+
    </pre>
    <p>
        Após calcule a média das posições 1 e 2
        do vetor e armazene o resultado na posição 3.
    </p>
    <p>
        Utilize uma estrutura de condição verificar se a média,
        armazenada na posição 3 é maior ou igual a 6, se for
        armazena na posição 4 do vetor a situação "Aprovado",
        caso contrário armazene "reprovado".
    </p>

    <p>
        Imprima o vetor utilizando o comando var_dump
    </p>
    
</p>

<pre>
        +---------+
        |Murilo   | 
        +---------+
        |4        |
        +---------+
        |3        |
        +---------+
        |3.5      |
        +---------+
        |Reprovado|
        +---------+
    </pre>

    <p>
        Imprima o vetor utilizando o comando var_dump
    </p>
    
</p>

<h2> Resposta </h2>
<?php

    $murilo=[];
    $murilo []= "Murilo";
    $murilo []= 4;
    $murilo []= 3;
    $murilo []= ($murilo[1] + $murilo[2]) / 2;
    
    if ($murilo[3]>=6){
       $murilo[4]= "Aprovado";
    }else{
        $murilo[4]="Reprovado";
    }
    echo "<pre>";
    var_dump($murilo);
    echo "</pre>";
   








?>