<?php

class Filme {
    private $titulo;
    private $genero;
    private $duracao;

    public function __construct($titulo, $diretor, $genero, $duracao) {
        $this->titulo = $titulo;
        $this->diretor = $diretor;
        $this->genero = $genero;
        $this->duracao = $duracao;
    }
   
    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function getDuracao() {
        return $this->duracao;
    }

    public function setDuracao($duracao) {
        $this->duracao = $duracao;
    }

    public function Classificaçao($genero){
        if($this->genero == Terror || $this->genero == Ação) {
            echo "O filme é para maiores de idade";
        }else{
            echo "O filme é de classificaçao Livre";
        }
    }

}

class Sala {
    private $numero;
    private $quantidadePessoas;
 
    public function __construct($numero) {
        $this->numero = $numero;
        $this->capacidade = $capacidade;
    }
   
    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }
    public function incrementPessoas() {
        $this->$quantidadePessoas += 1;
    }

    public function verificarLimite() {
        if ($quantidadePessoas = 30){
          echo "sala esgostada";
        }
  }

}

class Cliente {
    private $nome;
    private $estudante;
    private $carteirinha;


    public function __construct($nome, $estudante, $carteirinha) {
        $this->nome = $nome;
        $this->estudante = $estudante;
        $this->carteirinha = $carteirinha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEstudante() {
        return $this->Estudante;
    }

    public function getCarteirinha() {
        return $this->carteirinha;
    }

    public function setCarteirinha($carteirinha) {
        $this->carteirinha = $carteirinha;
    }

    public function verificarCarteirinha() {
        if ($this->carteirinha == "Carterinha de estudante") {
            $this->Estudante = true;
        } else {
            $this->Estudante = false;
        }
    }
}

class Ingresso extends Cliente {
    private $sala;
    private $filme;
    private $valor;
    private $carteirinha;
   

    public function __construct($sala, $filme, $valor, $carteirinha){
        $this->sala = $sala;
        $this->filme = $filme;
        $this->valor = $valor;
        $this->carteirinha = $carteirinha;
    }

    public function getSala() {
        return $this->sala;
    }

    public function setSala($sala) {
        $this->sala = $sala;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setFilme($filme) {
        $this->filme = $filme;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor() {
        $this->valor = $valor;
    }

    public function getCarteirinha() {
        return $this->carteirinha;
    }

    public function setCarteirinha($carteirinha) {
        $this->carteirinha = $carteirinha;
    }

    public function verificacaoDeCompra($valor, $valorPago){
        if($valorPago < $this->valor || $this->valor < $valorPago) {
        echo "Valor incorreto no pagamento";
        } else {
        $valorPago = $this->valor;
        echo "Compra Concluída";
        }
    }
}
?>