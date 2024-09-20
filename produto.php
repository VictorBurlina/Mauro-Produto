<?php
class Produto {
    public $nome;
    public $descricao;
    public $valor;
    public $imagem;

    public function __construct($nome, $descricao, $valor, $imagem) {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->valor = (float)$valor; 
        $this->imagem = $imagem;
    }

    public function exibirInformacoes() {
        echo '
        <div class="card" style="width: 18rem; margin: 10px;">
            
            <div class="card-body">
                <img src=' . $this->imagem . ' class="card-img-top" style=" height:200px;">
                <h5 class="card-title">' . htmlspecialchars($this->nome) . '</h5>
                <p class="card-text">' . htmlspecialchars($this->descricao) . '</p>
                <p class="card-text">Preço: R$ ' . number_format($this->valor, 2, ',', '.') . '</p>
            </div>
        </div>';
    }
}
?>

