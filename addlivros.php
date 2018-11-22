<?php
    include("cabecalho/cabecalho.php");
    include("objetos.php");
?>
<form action="#" method="POST" class="form-group">
<br>
<br>
    <table class="table">
    <h2>    Cadastro de Livros !<h2>
    <tr>
        <td> ISBN </td>
         <td><input type="text" name="ISBN" class="form-control"></td>
    </tr>
    <tr>
        <td> NOME </td>
        <td><input type="text" class="form-control" name="NOME" class="form-control" required></td>
    </tr>
    <tr>
        <td> GENERO </td>
        <td><input type="text" class="form-control" name="GENERO" class="form-control" required></td>
    </tr>
    <tr>
        <td> PRECO </td>
        <td><input type="text" class="form-control" name="PRECO" class="form-control" required></td>
    </tr>
    <tr>
        <td><input type="submit" class="btn btn-primary" value="Cadastrar" name="Btn_Livros"></td>
    </tr>
<?php
    if(isset($_POST['Btn_Livros'])){
        $isbn   = $_POST['ISBN'];
        $nome   = $_POST['NOME'];
        $genero = $_POST['GENERO'];
        $preco  = $_POST['PRECO'];
        $preco = replace($preco,',','.');

        $insercao = InserirLivros($conn,$isbn,$nome,$genero,$preco);
        header("location:livros.php");

    }


?>