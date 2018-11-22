<?php
    if(array_key_exists('valida',$_GET) && $_GET['valida']=="erro") { ?>
        
        <center><h3 class="text-danger"> Usuário Invalido !</h3></center>

   <?php } ?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quattrocento+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
    <link rel="stylesheet" href="CSS/bootstrap.css">
 


    <title>Login</title>

  </head>

      <body>
      <script type="text/javascript">
          function loginfailed(){
            setTimeout("window.location='index.php'",3000);
          }
    </script>
	  <center>

      <form name="Login" method="POST" action="valida.php">
            
            <br><br><br><br><div class="titulo">SoftBook</div>
            <br><br><br><br><br><br>

        <header>
                  
              <img src="Imagens/livro.png" width="40%">

          <h1 class="titulo2">Login</h1>

          <p><img src="Imagens/user.jpg" width="8%"><input type="text" name="usuario" placeholder="Usuario" required></p>
          <p><img src="Imagens/password.png" width="5%"><input type="password" name="senha" placeholder="Senha" required></p>
          <br><p><input type="submit" class="button" name="enviar" value="Entrar"></p>.
        </header>
            
      </form>

	  </center>


</body>

</html>