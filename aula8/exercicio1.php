<h2> Ordenação - Ordem Alfabética</h2>

<?php
    $nomes =[
        "Murilo",
        "Poliana",
        "Dalva",
        "Lavinia",
        "Camila",
        "Kaua"

    ];
    //Camila, Dalva, Kaua, Lavinia, Murilo e Poliana.


    for($c=0; $c<=5; $c++){
    for ($i = $c + 1;$i<=5; $i++) {
    if($nomes[$c] > $nomes [$i]){
        $celBranco = $nomes[$i];
        $nomes[$i] = $nomes[$c];
        $nomes[$c] = $celBranco;
       }
    }
}

  






    var_dump($nomes);


    ?>