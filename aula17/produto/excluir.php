<?php require_once "../controla_sessao/controla.php"?>
<?php

require_once "../conexao.php";

//verefica se foi enciado o parametro id
if(isset($_GET['id'])){


//pega o valor com o id que foi enviado pela URL
$id = $_GET['id'];


//String com o comando SQL para ser executado no DB 
$sql = "DELETE FROM `produto` WHERE  `idproduto`= ?;"; 



//Prepara o SQL para ser executado no banco de dados
$comando= $conexao->prepare($sql);

//Adiciona os valores nos parâmetros
$comando->bind_param("i", $id);

//executa o SQL - Comando no Banco de Dados 
$comando->execute();

}

//abre o arquivo form.php, vai para um arquivo e ja volta para o outro
header("Location: index.php");
