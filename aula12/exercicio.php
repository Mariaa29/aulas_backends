<p>
    Crie uma página em PHP para gerar a tabuada de "X".
    O "X", número da tabuada deve ser enviado via get.
</p>

<?php

$tabuada = $_GET ["tabuada"];
for ($i=0; $i<=10; $i++){
$resposta =$tabuada * $i;
echo "$tabuada * $i =" . $resposta ."<br>";
}
?>