<?php
//CONEXÃO COM O BANCO DE DADOS
$conexao = mysqli_connect("127.0.0.1", "root", "", "peton");

//Verifica se está tudo 'ok' com a conexão
/*if (!$conexao) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($conexao) . PHP_EOL;

mysqli_close($conexao);*/
?>