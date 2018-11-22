<?php
    ##include("cabecalho/cabecalho.php");;
    include("objetos.php");
    $cpf =$_GET['cpf'];
    $deletando= DeleteClientes($conn,$cpf);

    header("location:clientes.php");


?>