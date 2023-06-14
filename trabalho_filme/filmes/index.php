
<?php require_once "../filmes/consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>


<div class="container">

    <h1>Filmes</h1>
    <hr>
    <div class="text-end">
        <a href="form.php" class="btn btn-success"> Cadastrar Filmes</a>

    </div>

    <table class="table" id="myTable">
  <thead>
    <tr>
     
      <th scope="col">Título</th>
      <th scope="col">Diretor</th>
      <th scope="col">Ano</th>
      <th scope="col">Gênero</th>
      <th scope="col">Ações</th>
 
    </tr>
  </thead>

  <tbody>
<?php foreach($filmes as $filme){ ?>
    <tr>
      <td scope="row"><?php echo $filme ["titulo"];?></td>
      <td><?php echo $filme ["diretor"];?></td>
      <td><?php echo $filme ["ano"];?></td>
      <td><?php echo $filme ["genero"];?></td>
      
    
      <td class="text-end">
        <a href="excluir.php?id=<?php echo $filme["idfilmes"];?>" class="btn btn-danger"> <i class="fa-solid fa-trash"></i> Excluir</a>
        <a href="form.php?id=<?php echo $filme["idfilmes"];?>" class="btn btn-primary"> <i class="fa-solid fa-pen-to-square"></i> Atualizar</a>
      </td>
    </tr>
<?php } ?>
   
  </tbody>
</table>

</div>


<?php require_once "../template/rodape.php"; ?>


                                                                                                                                                                                                                                                                        