<?php
session_start();
include 'produto.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: novo.php');
    exit();
}

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$imagem = $_POST['imagem'];

$produto = new Produto($nome, $descricao, $valor, $imagem);

if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = [];
}

$_SESSION['produtos'][] = serialize($produto);

header('Location: mostra.php');
exit();
?>
