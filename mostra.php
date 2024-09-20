<?php
session_start();
require 'produto.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Produtos Cadastrados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Meu Site</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="novo.php">Cadastrar Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="mostra.php">Mostrar Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sair.php">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <h1>Produtos Cadastrados</h1>
    <div class="row" style="
    justify-content: center;">
        <?php
    
        if (isset($_SESSION['produtos']) && count($_SESSION['produtos']) > 0) {
            foreach ($_SESSION['produtos'] as $produto) {
                    $produto = unserialize($produto);
                    $produto->exibirInformacoes();
                    
            
            }
        } else {
            echo '<p>Nenhum produto cadastrado.</p>';
        }
        ?>
    </div>
    <a href="novo.php" class="btn btn-secondary">Cadastrar Novo Produto</a>
    <a href="sair.php" class="btn btn-danger">Sair</a>
</div>
</body>
</html>
