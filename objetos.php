<?php
include("conecta.php");

        function DadosCliente($conn){
                $clientes=array();
                $select=oci_parse($conn,"SELECT CPF,NOME,EMAIL,CEP,TELEFONE,DATA_NASCIMENTO FROM CLIENTE ORDER BY NOME ASC");
                oci_execute($select);
                while(($row = oci_fetch_array($select, OCI_BOTH)) != false){
                       array_push($clientes,$row);
                   }
                   return $clientes;
                oci_free_statement($select);
                oci_close($conn);
            }
        function DeleteClientes($conn,$cpf){
                $delete=oci_parse($conn,"DELETE FROM CLIENTE WHERE CPF='$cpf'");
                oci_execute($delete);
                    return $sucesso;
                }
        function InserirCliente($conn,$cpf,$nome,$email,$cep,$telefone,$data){
                 $inserir=oci_parse($conn,"INSERT INTO CLIENTE(CPF,NOME,EMAIL,CEP,TELEFONE,DATA_NASCIMENTO) VALUES ('$cpf','$nome','$email','$cep','$telefone','$data')");
                 $i=oci_execute($inserir);
                    return $i;
                }

        function ExibirLivros($conn){
                $livros=array();
                $select = oci_parse($conn,"SELECT ISBN,NOME,GENERO,PRECO FROM LIVRO");
                oci_execute($select);
                while(($row = oci_fetch_array($select, OCI_BOTH)) !=false){
                        array_push($livros,$row);
                }
                return $livros;
            }
            function DeleteLivros($conn,$isbn){
                $delete=oci_parse($conn,"DELETE FROM LIVRO WHERE ISBN='$isbn'");
                oci_execute($delete);
                    return $delete;
                }
            function InserirLivros($conn,$isbn,$nome,$genero,$preco){
                $inserir=oci_parse($conn,"INSERT INTO LIVRO(ISBN,NOME,GENERO,PRECO) VALUES ('$isbn','$nome','$genero','$preco')");
                $inserir=oci_execute($inserir);
                    return $inserir;
            }


  

           
            ?>

