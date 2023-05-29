<?php include_once "../template/cabecalho.php"; ?>

<div class="container">

<form action="verifica_login.php" method="post">

<label class="form-label">Usuário</label>
<input type="text" name="usuario" class="form-control" id="login">

<label class="form-label">Senha</label>
<input type="text" name="password" class="form-control">

<button type="submit" class="btn btn-primary">Entar</button>

<?php include_once "../template/rodape.php"; ?>

</div>