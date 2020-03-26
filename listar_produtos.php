<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Listagem de Produtos</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://kit.fontawesome.com/c48ac84403.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <div class="container" style="margin-top: 40px">
            
            <div style="text-align: right">
                <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
            </div>
            
            <h3>Lista de Produtos</h3>

            <table class="table">
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
                <tbody>

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
                            <td><a class="btn btn-warning btn-sm" style="color: #ffffff" href="editar_produto.php?id=<?php echo $id_estoque ?>"role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a>

                                <a class="btn btn-danger btn-sm" style="color: #ffffff" href="deletar_produto.php?id=<?php echo $id_estoque ?>"role="button"><i class="fas fa-trash-alt"></i>&nbsp;Excluir</a>


                            </td>

                        <?php } ?>
                    </tr>

                </tbody>
            </table>

        </div>



        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    </body>





</html>