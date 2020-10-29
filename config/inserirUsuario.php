<?php
    include('conexao.php');
    include('password.php');


    #Verifica se tem um email para pesquisa
if(isset($_POST['email'])){ 
 
    #Recebe o Email Postado
    $email = $_POST['email'];
 
    #Conecta banco de dados 
    $sql = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '{$email}'") or print mysql_error();
 
    #Se o retorno for maior do que zero, diz que já existe um.
    if(mysqli_num_rows($sql)>0) 
        echo json_encode(array('email' => 'Já existe um usuário cadastrado com este email')); 
    else 
        echo json_encode(array('email' => 'E-mail disponível.' ));
}

    /*
    $nomeUsuario = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cepform = $_POST['cep'];
    $senha = $_POST['senha'];

    function get_endereco($cep){
    
        //Formata o cep para caracteres nao numericos
        $cep = preg_replace("/[^0-9]/", "", $cep);
        $url = "http://viacep.com.br/ws/$cep/xml/";
        
        $xml = simplexml_load_file($url);
        return $xml;
        
    }
    
    $endereco = (get_endereco($cepform));
    
        //echo "CEP:      $endereco->cep <br>";
        //echo "Rua:      $endereco->logradouro <br>" ;
        //echo "Bairro:   $endereco->bairro <br>" ;
        //echo "cidade:   $endereco->localidade <br>" ;
        //echo "UF:       $endereco->uf <br>" ;
        //echo "Número:   $endereco->complemento <br>" ;
        //echo "ibge:     $endereco->ibge <br>" ;
        //echo "gia:      $endereco->gia <br>" ;
    
        /*  
        echo "<pre>";
        var_dump(get_endereco($cepform));
        echo "</pre>";
        */

        /* Função para validar novo usuário e mosrar msg de sucesso. Função desativada pois foi implementado o Ajax
        if(mysqli_affected_rows($conexao) != 0){
            echo '
            <meta http-equiv=refresh content = "3;url=http://localhost/peton/public/index.php">
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>">
            <script>
                window.onload = function() {
                    Swal.fire({
                        title: "Usuário cadastrado com sucesso!",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 3000
                    })
                };
            </script>
                ';    
        }else{
            echo '
                <meta http-equiv=refresh content = "3;URL=http://localhost/peton/view/pages/cadastroUsuario.php">
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>">
                <script>
                window.onload = function() {
                    Swal.fire(
                        "Ops...",
                        "Usuário não cadastrado! Verifique os dados e tente novamente.",
                        "error"
                        )
                };
            </script>
            ';    
        }*/
        
?>
