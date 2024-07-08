<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aula de vetor</h1>
    <?php
        $vetor = array(85, 54, 76, 15, 3);

        $outrovetor = [1, 2, 3, 4, 5];

        for($i=0;$i<count($vetor);$i++)
            echo $vetor[$i] . "<br>";

        $j = 0;

        while($j < 5){
            echo $outrovetor[$j] . "<br>";
            $j++;
        }
    ?>

    <h1>Atividade de Programação</h1>
    <?php
        $vet1 = [1, 2, 3, 4, 5];
        $soma = 0;
        for($v1 = 0; $v1 < 5; $v1++){
            echo $vet1[$v1] . "<br>";
            $soma = $soma + $vet1[$v1];
        }
        echo $soma. "<br>";
    ?>
</body>
</html>