<?php
    require('conexao.php');
    $descricao = $_POST["descricao"];
    $marca = $_POST["marca"];
    $estoque = $_POST["estoque"];
    $preco = $_POST["preco"];


    $sql = mysqli_query($conexao, "INSERT INTO produtos (descricao, marca, estoque, preco) VALUES ('$descricao', '$marca', '$estoque', '$preco')");
        
 
    if ($sql==true){
        print "<script>alert('Cadastro com sucesso');</script>"; 
        print "<script>location.href='?page=listar';</script>";
    }else{
        print "<script> alert('Não foi possível cadastrar');</script>"; 
        print "<script> location.href='?page=listar';</script>";
    } 
?>