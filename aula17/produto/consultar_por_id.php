<?php

require_once "../conexao.php";

//verefica se foi enciado o parametro id
if(isset($_GET['id'])){


//pega o valor com o id que foi enviado pela URL
$id = $_GET['id'];


//String com o comando SQL para ser executado no DB 
$sql = "SELECT * FROM `produto` WHERE  `idproduto`= ?;"; 


//Prepara o SQL para ser executado no banco de dados
$comando= $conexao->prepare($sql);

//Adiciona os valores nos parâmetros
$comando->bind_param("i", $id);

//executa o SQL - Comando no Banco de Dados 
$comando->execute();

//pegar o resultado da consulta 
$resultado = $comando->get_result();

//pegar a primeira linha de resultado
$produto = $resultado->fetch_assoc();



}


