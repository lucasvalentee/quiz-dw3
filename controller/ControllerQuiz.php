<?php

$oControllerQuiz = new ControllerQuiz();

class ControllerQuiz {

    public function __construct() {
        $this->verificaRequisicao();        
    }

    private function verificaRequisicao() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->insereRegistro();
            echo 'entrou no insere';
        } else {
            $this->listaRegistro();
            echo 'entrou na listagem';
        }
    }

    private function insereRegistro() {

    }

    private function listaRegistro() {

    }
  
}