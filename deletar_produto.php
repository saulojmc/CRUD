<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$deletar = mysqli_query($conexao, $sql);


?>


<!DOCTYPE html>
<html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
    <div class="container" style="width: 400px">
        <center>
            <h3>Deletado com Sucesso!</h3>
            <div style="margin-top: 10px">
            <a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
            </div>
        </center>
    </div>
</html>