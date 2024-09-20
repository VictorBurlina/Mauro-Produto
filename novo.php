<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Novo Produto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Meu Site</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="novo.php">Cadastrar Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mostra.php">Mostrar Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sair.php">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <h1>Cadastrar Novo Produto</h1>
    <form action="cria.php" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" required></textarea>
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="number" class="form-control" id="valor" name="valor" required step="0.01">
        </div>
        <div class="form-group">
            <label for="imagem">URL da Imagem</label>
            <input type="text" class="form-control" id="imagem" name="imagem" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
</body>
</html>
