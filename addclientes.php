<?php
    include("cabecalho/cabecalho.php");
    include("objetos.php");

    if(array_key_exists('btn_cadastro',$_POST) && $_GET["Cadastrar"]=true) { ?>
         <p class="text-success"> O produto foi removido !</p>
    <?php }

?>
    
<form action="#" method="POST" class="form-group">
    <table class="table">
    <h2>    Cadastro de Clientes !<h2>
    <tr>
        <td> Nome </td>
         <td><input type="text" name="Nome" class="form-control"></td>
    </tr>
    <tr>
        <td> CPF </td>
        <td><input type="text" class="form-control" name="Cpf" class="form-control" required></td>
    </tr>
    <tr>
        <td> Nascimento </td>
        <td><input type="text" class="form-control" name="Data" class="form-control" required></td>
    </tr>
    <tr>
        <td> CEP </td>
        <td><input type="text" class="form-control" name="Cep" class="form-control" required></td>
    </tr>
    <tr>
        <td> Telefone </td>
        <td><input type="text" class="form-control" name="Telefone" class="form-control" required></td>
    </tr>
    <tr>
        <td> Email </td>
        <td><input type="text" class="form-control" name="Email" class="form-control" required></td>
    </tr>
    <tr>
        <td class="text-center"><input type="submit" value="Cadastrar" name="btn_cadastro" class="btn btn-primary form-control"></td>
    </tr>
</form>
<?php
        if(isset($_POST['btn_cadastro'])){
           
            $nome     = $_POST['Nome'];
            $cpf      = $_POST['Cpf'];
            $data     = $_POST['Data'];
            $cep      = $_POST['Cep'];
            $telefone = $_POST['Telefone'];
            $email    = $_POST['Email'];
            $data     =$_POST['Data'];
            /*$partes = explode("-", $data);
            $ano = $partes[0];
            $mes = "JUL";
            $dia = $partes[2];
            $data=$dia."-".$mes."-".$ano;
            */
        $cadastra= InserirCliente($conn,$cpf,$nome,$email,$cep,$telefone,$data);
        header("location:clientes.php");
            
    }

?>