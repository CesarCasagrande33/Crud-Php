<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Formulário de cadastro</title>

    <style>
        #tamanhoContainer {
            width: 500px;
        }
    </style>
</head>

<body>

    <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
    <div style="text-align: right">
  <a href="index.php" role="button" class="btn btn-sm btn-warning">Voltar</a>
  </div>

        <h4>Formulário de Cadastro</h4>
        <form action="inserir_produto.php" method="post" style="margin-top: 20px;">
            <div class="form-group">
                <label>Nro Produto</label>
                <input type="number" name="nroproduto" class="form-control" placeholder="Insira o numero do produto"
                    autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" name="nomeproduto" class="form-control" placeholder="Insira o nome do produto"
                    autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria">
                    <option>Periférico</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                </select>
            </div>

            <div class="form-group">
                <label>Quantidade</label>
                <input type="text" name="quantidade" class="form-control" placeholder="Insira a quantidade de produtos"
                    autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor">
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                    <option>Fornecedor D</option>
                </select>
            </div>
            
            <div style="text-align: right;">
                <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
            </div>

        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>