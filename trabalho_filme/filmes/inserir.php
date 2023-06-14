
<?php 
if (isset ($_POST["titulo"]) && isset($_POST["diretor"]) && isset($_POST["ano"]) && isset($_POST["genero"]) )


$id= $_POST['idfilmes'];


//String com o comando SQL para ser executado no DB 
$sql = "INSERT INTO `filmes` (`titulo`, `diretor`, `ano`, `genero`) VALUES (?, ?, ?, ?);"; 
echo $sql;


//Prepara o SQL para ser executado no banco de dados
$comando= $conexao->prepare($sql);

//Adiciona os valores nos parâmetros
$comando->bind_param("ssds", $titulo, $diretor, $ano, $genero);

//executa o SQL - Comando no Banco de Dados 
$comando->execute();

//abre o arquivo form.php, vai para um arquivo e ja volta para o outro
header("Location: index.php");

?>