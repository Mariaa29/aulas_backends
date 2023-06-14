

<?php

require_once "../conexao.php";

if (isset ($_POST["titulo"]) && isset($_POST["diretor"]) && isset($_POST["ano"]) && isset($_POST["genero"]) )
{




//String com o comando SQL para ser executado no DB 
$sql = "UPDATE produto SET `titulo`=?, `diretor`=?, `ano`=?, `genero`=? WHERE  `idfilmes`=?;"; 
echo $sql;


//Prepara o SQL para ser executado no banco de dados
$comando= $conexao->prepare($sql);

//Adiciona os valores nos parâmetros
$comando->bind_param("ssdsi", $titulo, $diretor, $ano, $genero, $id);

//executa o SQL - Comando no Banco de Dados 
$comando->execute();
 }
//abre o arquivo form.php, vai para um arquivo e ja volta para o outro
header("Location: index.php");
