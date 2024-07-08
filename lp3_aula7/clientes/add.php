<!doctype html>
<html lang="en">

<head>
    <?php include "../includes/head.php"; ?>
</head>

<body>

    <h3>Sistema 0-0-11</h3>


    <div class="row">
        <?php include "../includes/menu.php"; ?>
        <div class="col-9 dados">
            <h4>Client list</h4>
            <form action="add1.php" method="post">
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Your name"
                        name="nome">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                        placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="">CPF</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="XXX.XXX.XXX.XX"
                        name="cpf">
                </div>
                <div class="mb-3">
                    <label class="form-label">Sexo</label>
                    <div class="form-check" mb-3>
                        <input class="form-check-input" type="radio" id="flexRadioDefault1" name="sexo" value="1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" id="flexRadioDefault2" name="sexo" value="0"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Feminino
                        </label>
                    </div>
                    <label class="form-label mb-3">Data de nascimento</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="XXX.XXX.XXX.XX"
                        name="date">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Obs</label>
                    <textarea class="form-control  mb-3" id="exampleFormControlTextarea1" rows="3"
                        name="obs"></textarea>
                    <button type="submit" class="btn btn-primary">Gravar</button>
                    <a href="index.php" type="button" class="btn btn-danger">Voltar</a>
                </div>
        </div>
        </form>
    </div>
    </div>
    </div>

    <?php include "../includes/js.php"; ?>
</body>

</html>