 <?php
  if(isset($_POST['cor'])){
    $cor = $_POST['cor'];
  }else{
    $cor = 'white';
  }

 ?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?php echo $cor ?>;
        }
    </style>
</head>


<body>
    <form method="post" action="atividade1.php">
        <label for="cor" > Selecione uma cor</label><br>
        <input type="color" name="cor" id="cor"><br>
        <button type="submit">Enviar</button>

    </form>
    



    </body>
    </html>



