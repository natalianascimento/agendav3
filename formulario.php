<?php 
$operacao = $_POST["operacao"];
require_once 'pdo.php';
$instaciar = new Conexao();


if ($operacao=="cadastrar"){
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $instaciar->cadastrar($nome,$telefone);
}



?>