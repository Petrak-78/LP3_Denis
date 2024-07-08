<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   
<form action="dados.php" method="post">
  <div class="row mb-3">
    <label for="input" class="col-sm-2 col-form-label">Nome do jogo</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="" name="nomejogo">
    </div>
  </div>
  <div class="row mb-3">
    <label for="input" class="col-sm-2 col-form-label">Empresa responsável</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="empresa">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Estilo do jogo</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="estilos" id="radio" value="FPS" checked>
        <label class="form-check-label" for="gridRadios1">
          FPS
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="estilos" id="gridRadios2" value="MOBA">
        <label class="form-check-label" for="gridRadios2">
          MOBA
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="estilos" id="gridRadios1" value="RPG" checked>
        <label class="form-check-label" for="gridRadios1">
          RPG
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="estilos" id="gridRadios1" value="PVP" checked>
        <label class="form-check-label" for="gridRadios1">
          PVP
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="estilos" id="gridRadios1" value="FPA" checked>
        <label class="form-check-label" for="gridRadios1">
          FPA
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="estilos" id="gridRadios1" value="RTS" checked>
        <label class="form-check-label" for="gridRadios1">
          RTS
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="estilos" id="gridRadios1" value="MMORPG" checked>
        <label class="form-check-label" for="gridRadios1">
          MMORPG
        </label>
      </div>
      
    </div>
  </fieldset>
  <div class="row mb-3">
  <legend class="col-form-label col-sm-2 pt-0">Plataformas compativeis Compativeis</legend>
    <div class="col-sm-10 offset-sm-2">
    
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="plataforma" value="PC">
        <label class="form-check-label" for="gridCheck1">
          PC
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="plataforma" value="Console">
        <label class="form-check-label" for="gridCheck1">
          Console
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="plataforma" value="Nintendo">
        <label class="form-check-label" for="gridCheck1">
          Nintendo
        </label>
      </div>
    </div>
  </div>
  <div class="col-auto">
    <label >Loja onde disponivel</label>
    <select class="form-select" id="autoSizingSelect" name="loja">
      <option value="Steam">Steam</option>
      <option value="Epic Games">Epic Games</option>
      <option value="Xbox Store">Xbox store</option>
    </select>
  </div>
  <span>Nos Diga sua opinião sobre o jogo:</span>
  <br>
  <textarea id="" cols="100" rows="10" name="textarea"></textarea>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>