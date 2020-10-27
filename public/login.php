<?php
include('../config/conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: index.php');
}
$email = $_POST["email"];
$senha = $_POST["senha"];

$query = mysqli_query($conexao,"SELECT * FROM usuario WHERE email ='$email' and senha='$senha'");

$row = mysqli_num_rows($query);

echo $row;exit;

?>