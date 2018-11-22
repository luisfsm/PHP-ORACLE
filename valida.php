<?php 
      include("conecta.php");
      $usuario=$_POST['usuario'];
      $senha=$_POST['senha'];
      $senha = md5($senha);
      var_dump($senha);
      $user=array();
      $consulta=oci_parse($conn,"SELECT USUARIO FROM USUARIOS WHERE USUARIO='$usuario' AND SENHA_MD='$senha'");
      oci_execute($consulta);
      while(($row = oci_fetch_array($consulta, OCI_BOTH)) != false){
             array_push($user,$row);
        }
        var_dump($user);
        foreach($user as $validado){
            $login=$validado['USUARIO'];

        } 
         if(!empty($login)){
            session_start();
            
                echo $_SESSION['USUARIO'];
                header("location:clientes.php");
                $_SESSION['USUARIO']=$login;
                $_SESSION['logado'];
         }
         else{
             die();

             header("location:index.php?valida=erro");
         }

        /*
        if(is_array($user['USUARIO'])){
            echo "VAZIO";
        }
      else{
          echo $user['USUARIO'];
          var_dump($user);
      }
         
      foreach($user as $usuarios){
        $valido=$usuarios['USUARIO'];
        }
        echo $valido;
        ;
        ##var_dump($usuarios);
     
        if(!empty($usuarios)){
            ##
            echo "$usuarios";
        }else{
      
            echo " SESSÃO OK, ". $_SESSION['USUARIO'];
            ##
        }

        
      var_dump($user);
         if(!empty($user)){

         ## 
         }
         if(empty($usuario)){
            ##
            echo "ELSE";
            var_dump($usuario);
         }
         */