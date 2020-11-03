<?php
    include('conexao.php');
    include('buscaCEP.php');
    include('password.php');

    if(isset($_POST["email"])) {
        $nomeUsuario = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        
        $pesquisarUsuario = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '{$email}'") or print mysql_error();

        $retorno = array();

        if (mysqli_num_rows($pesquisarUsuario) > 0) {
            $retorno["sucesso"] = false;
            $retorno["mensagem"] = "Falha ao efetuar o cadastro. Verifique os dados e tente novamente.";
        } else {
            $inserirUsuario = "INSERT INTO usuario (nome, email, telefone, senha, bairro, cidade, estado) VALUES ('$nomeUsuario', '$email', '$telefone', sha1('$senha'), '$bairro', '$cidade', '$estado')";
        
            $operacao_insercao = mysqli_query($conexao,$inserirUsuario);

            if($operacao_insercao) {
                $retorno["sucesso"] = true;
                $retorno["mensagem"] = "Cadastro realizado com sucesso!";
            } else {
                
            }
        }
        echo json_encode($retorno);
    }