<?php 
  include("objetos.php");
  include("cabecalho/cabecalho.php");
        
?>
        <br>    
<table class="table table-bordered ">
    <tr>
                <td >ISBN</td>
                <td >NOME</td>
                <td >GENERO</td>
                <td>PRECO</td>
                <td>REMOVER</td>
    </tr>
        <br>
            <center><h1>Livros</h1></center>
        <?php  
            $livros = ExibirLivros($conn);
            foreach($livros as $livro){ ?>
                <tr>
                    <td><?php echo $livro['ISBN'];?></td>
                    <td><?php echo $livro['NOME'];?></td>
                    <td><?php echo $livro['GENERO'];?></td>
                    <td><?php echo $livro['PRECO'];?></td>
                    <td><a href="deletelivros.php?ISBN=<?php echo $livro['ISBN']; ?>"> X </a></td>
                </tr>
        <?php }  ?>
</table>

