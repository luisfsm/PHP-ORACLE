<?php 
  include("objetos.php");
  
  #require_once("valida.php");
  include("cabecalho/cabecalho.php");
?>
<br>
<br>
        
       <center><h2>Clientes </h2></center>
<table class="table table-bordered table-hover ">
        <tr>
                <td>CPF</td>
                <td>NOME</td>
                <td>EMAIL</td>
                <td>CEP</td>
                <td>TELEFONE</td>
                <td>DATA_NASCIMENTO</td>
                <td>REMOVER</td>
        </tr>

        <br>
        <?php
        $dados = DadosCliente($conn);       
            foreach($dados as $exibir){ ?>
                <tr>
                  <td ><?php echo $exibir['CPF']; ?></td>
                  <td ><?php echo $exibir['NOME']; ?></td>
                  <td ><?php echo $exibir['EMAIL']; ?></td>
                  <td ><?php echo $exibir['CEP']; ?></td>
                  <td ><?php echo $exibir['TELEFONE']; ?></td>
                  <td ><?php echo $exibir['DATA_NASCIMENTO']; ?></td>
                  <td><a href="deletecliente.php?cpf=<?php echo $exibir['CPF']; ?>">X</a></td>
                </tr>      
        <?php } ?>
</table>
<br>    
