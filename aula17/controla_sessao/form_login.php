<?php include_once "../controla_sessao/verifica_login.php"; ?>
<?php include_once "../template/cabecalho.php"; ?>


<div class="container">
    <h1> Controle de acesso</h1>
        <hr>

<?php if(isset($erro_login)):?>

   <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <?php echo $erro_login; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php endif; ?>



<form action="form_login.php" method="post">

<label class="form-label">Usuário</label>
<input type="text" name="usuario" class="form-control" id="login">

<label class="form-label">Senha</label>
<input type="password" name="senha" class="form-control">

<button type="submit" class="btn btn-primary">Entar</button>

<?php include_once "../template/rodape.php"; ?>

</div>