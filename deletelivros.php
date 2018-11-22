<?php
    include("objetos.php");
    $isbn = $_GET['ISBN'];
    $livros =DeleteLivros($conn,$isbn);
    header("location:clientes.php");
?>