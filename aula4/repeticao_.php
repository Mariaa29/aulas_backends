<h2>Estrutura de repetição for </h2>
<p>
    Utilizada para repetir uma sequência de 
    instrucões por um número predeterminado de vezes.

</p>

<p>
        <pre>
            for(inicio; condição, passo){
                //instruções a serem repetidos
            }
        </pre>
</p>


    //for($contador= 0; $contador <= 10; $contador++){
    //    echo "2 x $contador = " . $contador * 2 . "<br>";
    //}


  
<div class="container">
 <?php
for($tabuada = 1; $tabuada<= 10; $tabuada++){
 echo "<div>";
 for($contador = 0; $contador <= 10; $contador++){
$resultado = $tabuada * $contador;
echo "$tabuada x $contador = $resultado <br>";
 echo "<br>";
 }
 echo "</div>"; 
 
}

?>
</div>
