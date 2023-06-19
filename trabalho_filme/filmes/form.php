<?php require_once "consultar_por_id.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>



    <div class="container">


    <h1> Cadastro de Filmes</h1>
    <hr>


   <form action="<?php echo isset($filme) ? 'atualizar.php' : 'inserir.php' ?>" method="post" enctype="multipart/form-data">


    <label for="titulo" class= "form-label"> Título </label><br>
    <input class="form-control" type="text" name="titulo" id="titulo" value="<?php echo $filme['titulo'] ?? ""; ?>"><br>
    <input type="hidden" name="id" id="id" value="<?php echo $filme['idfilmes'] ?? ""; ?>"><br>
    
    <label for="diretor" class= "form-label"> Diretor </label><br>
    <textarea name="diretor" id="diretor"> <?php echo $filme['diretor'] ?? ""; ?> </textarea><br>

    <label for="ano" class= "form-label"> Ano </label><br>
    <input class="form-control" type="year"  name="ano" id="ano" value="<?php echo $filme['ano'] ?? ""; ?>" ><br>

   <label for="genero" class= "form-label"> Gênero </label><br>
    <textarea name="genero" id="genero"> <?php echo $filme['genero'] ?? ""; ?> </textarea><br>

    <button type="submit" class=" btn btn-info"> Cadastrar </button><br>



   </form>
</div>

   <?php require_once  "../template/rodape.php"; ?>
                                                         