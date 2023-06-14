

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
      <th scope="col">ID</th>
      <th scope="col">Título</th>
      <th scope="col">Diretor</th>
      <th scope="col">Ano</th>
      <th scope="col">Gênero</th>
 
    </tr>
  </thead>

  <tbody>
<?php foreach($filmes as $filme){ ?>
    <tr>
      <th scope="row"><?php echo $filme ["titulo"];?></th>
      <td><?php echo $filme ["preco"];?></td>
    
      <td class="text-end">
        <a href="excluir.php?id=<?php echo $fime ["idfilmes"];?>" class="btn btn-danger"> <i class="fa-solid fa-trash"></i> Excluir</a>
        <a href="form.php?id=<?php echo $filme ["idfilmes"];?>" class="btn btn-primary"> <i class="fa-solid fa-pen-to-square"></i> Atualizar</a>
      </td>
    </tr>
<?php } ?>
   
  </tbody>
</table>

</div>


<?php require_once "../template/rodape.php"; ?>

                                                                                                                                                                                                                                                                        