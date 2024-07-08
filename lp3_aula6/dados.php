<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>



<?php
$nome = $_POST['nomejogo'];
$company = $_POST['empresa'];
$style = $_POST['estilos'];
$plataforma = $_POST['plataforma'];
$loja = $_POST['loja'];
$opina = $_POST['textarea'];


?>
<ul class="list-group">
  <li class="list-group-item"><?php echo $nome ?></li>
  <li class="list-group-item"><?php echo $style ?></li>
  <li class="list-group-item"><?php echo $plataforma ?></li>
  <li class="list-group-item"><?php echo $loja ?></li>
  <li class="list-group-item"><?php echo $opina ?></li>
</ul>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>



