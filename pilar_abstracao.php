<?php

class Funcionario {

    // atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;


    //funções e métodos
    //
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }

    function setTelefome($telefone) {
        $this->telefone = $telefone;
    }

    //armazena o valor do atributo nome
    function getNome() {
        return $this->nome = $nome;
    }

    function getNumFilhos() {
        return $this->numFilhos = $numFilhos;
    }

    function getTelefone() {
        return $this->telefone = $telefone;
    }

    //função que será conectada no echo final
    function resumirCardFunc () {
        return "$this->nome  e ele possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos($numFilhos) {
       return $this->numFilhos = $numFilhos;
    }

}

//o $y vai armazenar o que está nos sets, e gets
//criar um novo funcionario
$y= new Funcionario(); 

//inserimos um nome
$y->setNome('Edivaldo'); 

//e a quantidade de filhos
$y->setNumFilhos(42); 

//aqui conectamos com a função 
echo $y->resumirCardFunc() . "<br>"; 

//daqui concatenamos e mostramos os valores que possuem
echo $y->getNome() . ' e possui ' . $y->getNumFilhos() . ' filhos  '; 


?>
