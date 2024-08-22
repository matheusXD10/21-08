<?php

//objeto novo
class Pessoa {

    //atributo nome para o objeto
public $nome=null;

//função construct para definir que o objeto foi iniciado
function __construct($nome){
    echo 'objeto iniciado';
    $this->nome = $nome;

}

//função destruct para definir que o objeto doi destruído
function __destruct(){
    echo 'objeto removido'
}

//GET para colocar valor no $nome
function __get($atributo) {
    return $this->$atributo;
}


}

//criamos a variável como uma nova pessoa, e setamos com o nome
$pessoa = new Pessoa('matheus'); 

// concatenamos com o  __get "mágico"
echo '<br> Nome:' . $pessoa->__get('nome') . '<br>'; 

//foi removido o objeto, deixando a variavel pessoa indefinida
unset($pessoa); 

?>
