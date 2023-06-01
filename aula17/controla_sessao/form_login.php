<?php include_once "../controla_sessao/verifica_login.php"; ?>
<?php include_once "../template/cabecalho.php"; ?>

<div class="container">
    <h1> Controle de acesso</h1>
        <hr>

<form action="form_login.php" method="post">

<label class="form-label">Usuário</label>
<input type="text" name="usuario" class="form-control" id="login">

<label class="form-label">Senha</label>
<input type="password" name="senha" class="form-control">

<button type="submit" class="btn btn-primary">Entar</button>

<?php include_once "../template/rodape.php"; ?>

</div>