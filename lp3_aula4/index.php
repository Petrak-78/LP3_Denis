<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <h2>Formulário de Dados</h2>

        <form action="chico_moedas.php">

            <div class="mb-3">
                <label for="idNome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="idNome" placeholder="Verônica" name="campoNome">
            </div>

            <div class="mb-3">
                <label for="idEmail" class="form-label">Email:</label>
                <input type="email" class="form-control" id="idEmail" placeholder="veronica@example.com" name="campoEmail">
            </div>

            <div class="mb-3">
                <label for="idData" class="form-label">Data de Nascimento:</label>
                <input type="date" class="form-control" id="idData" placeholder="" name="campoData">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="campoSexo" id="idMasc">
                <label class="form-check-label" for="idMasc">
                Masculino
                </label>
            </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="campoSexo" id="fidFem" checked>
                <label class="form-check-label" for="fidFem">
                Feminino
                </label>
            </div>

            <div class="mb-3">
                <label for="idDescricao" class="form-label">Descrição do Usuário</label>
                <textarea class="form-control" id="idDescricao" rows="3" placeholder="Aquariano nato" name="campoDescricao"></textarea>
            </div>

            <button type="submit" class="btn btn-secondary">Enviar</button>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>