<?php

include('conexao.php');

$email = $_POST['email'];

$verifica = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '{$email}'") or print mysql_error();

if(mysqli_num_rows($verifica)>0) {
    echo json_encode(array('email' => 'Já existe um usuário cadastrado com este e-mail!')); 
}else{
}