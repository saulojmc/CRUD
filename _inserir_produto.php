<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'conexao.php';

$nroproduto = $_POST['nroproduto']; //Recebe o valor do atributo
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto, '$nomeproduto', '$categoria', $quantidade, '$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px; margin-top: 20px">
    <center>
    <h4>Produto Adicionado com sucesso!</h4>
    </center>
    <div style="padding-top: 20px">
        <center>
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo ítem</a>
        </center>
    </div>
    
    
</div>