<?php
    include '../includes/conexao.php';
    $sql = "select * from produtos";

    $resultado = $conexao->query($sql);

    mysqli_close($conexao);
?>

<!doctype html>
<html lang="en">

<head>
    <?php include "../includes/head.php"; ?>
</head>

<body>
    <div class="container">
        <h3>System 0-0-11</h3>


        <div class="row">
            <?php include "../includes/menu.php"; ?>
            <div class="col-9 dados">
                <h4>Client list</h4>
                <a href="add.php" class="btn btn-success mb-3">Adicionar</a>
                <table class="table table-striped">
                    <thead>
                        
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Product</th>
                            <th scope="col">preço</th>
                            <th scope="col">actions</th>
                        </tr>
                       
                    </thead>
                    <tbody>
                    <?php while($item = mysqli_fetch_object($resultado)){?>
                        <tr>
                            <th scope="row"><?php echo $item->id; ?></th>
                            <td><?php echo $item->nome; ?></td>
                            <td><?php echo $item->categoria; ?></td>
                            <td><?php echo $item->preco; ?></td>
                            <td><a type="button" class="btn btn-outline-info"> Edit
                                </a>
                                <a type="button" class="btn btn-outline-danger">Delete</a>
                            </td>

                        </tr>
                        <?php }?>
                        
                    </tbody>
                </table>

            </div>

        </div>
    </div>
    </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>