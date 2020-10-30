<?php
session_start();
include('../config/conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: index.php');
}
$email = $_POST["email"];
$senha = sha1($_POST["senha"]);

$query = mysqli_query($conexao,"SELECT * FROM usuario WHERE email ='$email' and senha='$senha'");

$row = mysqli_num_rows($query);

if($row == 1){
$_SESSION['email'] = $email;
header('Location: ../view/pages/painel.php');
exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit(); 
}

?>