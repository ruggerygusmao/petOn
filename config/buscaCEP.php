<?php

$cep = $_POST['cep'];

$endereco = (get_endereco($cep));

$bairro = $endereco->bairro;
$cidade = $endereco->localidade;
$estado = $endereco->uf;

/*
if (empty($bairro) || empty($cidade) || empty($estado)) {
    echo json_encode(array('cep' => "Não conseguimos localizar seu endereço." ));
}else{
    echo json_encode(array('cep' => "$bairro, $cidade -  $estado" ));
}
*/

function get_endereco($cep)
{

    //Formata o cep para caracteres nao numericos
    $cep = preg_replace("/[^0-9]/", "", $cep);
    $url = "http://viacep.com.br/ws/$cep/xml/";

    $xml = simplexml_load_file($url);
    return $xml;
}
