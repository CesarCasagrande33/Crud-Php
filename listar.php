<!DOCTYPE html>
<html lang="en">

<head>
  <title>Listagem de produtos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

  <div class="container" style="margin-top: 40px">
  <div style="text-align: right">
  <a href="index.php" role="button" class="btn btn-sm btn-warning">Voltar</a>
  </div>
    <h4> Lista de produtos </h4>
    <br>
    <table class="table table-striped">
      <thead>
        <tr>

          <th scope="col">Nro Produto</th>
          <th scope="col">Nome Produto</th>
          <th scope="col">Categoria</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Fornecedor</th>
          <th scope="col">Ação</th>
          

        </tr>
      </thead>

      <?php
      include 'conexao.php';
      $sql = "SELECT * FROM `estoque`";
      $busca = mysqli_query($conexao, $sql);

      while ($array = mysqli_fetch_array($busca)) {

        $id_estoque = $array['id_estoque'];
        $nroproduto = $array['nroproduto'];
        $nomeproduto = $array['nomeproduto'];
        $categoria = $array['categoria'];
        $quantidade = $array['quantidade'];
        $fornecedor = $array['fornecedor'];
      ?>
        <tr>
          
          <td><?php echo $nroproduto ?></td>
          <td><?php echo $nomeproduto ?></td>
          <td><?php echo $categoria ?></td>
          <td><?php echo $quantidade ?></td>
          <td><?php echo $fornecedor ?></td>
          <td><a class="btn btn-warning btn-sm" href="editar.php?id=<?php echo $id_estoque ?>" role="button">Editar</a></td>
          <td><a class="btn btn-danger btn-sm" href="deletar.php?id=<?php echo $id_estoque ?>" role="button">Excluir</a></td>


        </tr>
        
        <?php } ?>


    </table>

  </div>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>