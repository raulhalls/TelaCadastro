<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tela de cadastro</title>
</head>
<body>
    <form action="conect.php" method="post" name='cadastro'>
        <div class="row">
         <div class="col-md-4">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nome</label>
          <input name="nome" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          <div id="emailHelp" class="form-text">Não compartilhe esse email com ninguem</div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        <div class="mb-3">
          <label  for="exampleInputPassword1" class="form-label">quantidade</label>
          <input name="quantidade" type="text" class="form-control" id="exampleInputPassword1" required>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        <div class="mb-3">
          <label  for="exampleInputPassword1" class="form-label">compra</label>
          <input name="preço_compra" type="text" class="form-control" id="exampleInputPassword1" required>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        <div class="mb-3">
          <label  for="exampleInputPassword1" class="form-label">venda</label>
          <input name="preço_venda" type="text" class="form-control" id="exampleInputPassword1" required>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        <div class="mb-3">
          <label  for="exampleInputPassword1" class="form-label">validade</label>
          <input name="validade" type="date" class="form-control" id="exampleInputPassword1">
        </div>
    </div>
    </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check</label>
        </div>
        <button type="submit" name='submit' class="btn btn-primary">Enviar</button>
      </form>





    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>