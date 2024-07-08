<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Integração HTML, CSS, PHP</h1>
    </div>

    <?php  
    $vet = array("loira", "morena", "mulata", "branca", "preta");
    for($i=0; $i<5; $i++){ ?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> <?php echo $vet[$i]; ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
    <?php } ?>
    
    <?php 
        $cor = ["primary", "success", "danger", "warning"];

        $msg = [
                    "Isso é uma informação!",
                    "Gravado com sucesso!",
                    "Ocorreu um erro!",
                    "Pode haver algum erro!"
                ];

        $cod = $_GET['cod'];
    ?>

    <div class="alert alert-<?php echo $cor[$cod];?>" role="alert">
        <?php echo $msg[$cod];?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>