<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'conexao.php';

echo $id = $_GET['id'];
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Tela Inicial</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <style type="text/css">

            #tamanhoContainer {
                width: 500px;
            }

            #botao {
                background-color: #FF1168;
                color: #ffffff;
            }

        </style>
    </head>
    <body>

        <div class="container" id="tamanhoContainer" style="margin-top: 20px">

            <h4>Formulário de Cadastro</h4>
            <form action="_atualizar_produto.php" method="post" style="margin-top: 20px"></form>
            <?php
            $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
            $buscar = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($buscar)) {
                $id_estoque = $array['id_estoque'];
                $nroproduto = $array['nroproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];
                ?>

                <div class="form-group">
                    <label>Nro Produto</label>
                    <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled="off">
                    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">  
                </div>

                <div class="form-group">
                    <label>Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">  
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
                    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">  
                </div>

                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">
                        <option>SAMSUNG</option>
                        <option>Xiaomi</option>
                        <option>Motorola</option>
                        <option>Apple</option>
                    </select>
                </div>

                <div style="text-align: right;">
                    <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
                </div>
            <?php } ?>
        </form>
    </div> 

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
