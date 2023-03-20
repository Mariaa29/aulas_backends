
<?php

//o código esta pegando dois valores fornecidos na barra url pelo usuário no caso 
//'numero1' e 'numero2' e executando a soma deles, a tag $_GET serve para requisitar algo (pedir),
//do servidor. 
//O ? usado serve para separar url dos dados que vão ser enciados para o servidor.
//Para mais de um valor é necessário usar o &.

   $resultado = $_GET ['numero1'] + $_GET ['numero2'];
   echo "O resultado da soma é $resultado";


?>