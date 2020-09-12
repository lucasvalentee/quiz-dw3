<?php

$oControllerQuiz = new ControllerQuiz();

class ControllerQuiz {

    public function __construct() {
        $this->verificaRequisicao();        
    }

    private function verificaRequisicao() {        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->insereRegistro();                        
        } else {
            $this->listaRegistro();           
        }
    }

    private function insereRegistro() {
                     
    }

    private function listaRegistro() {

    }
  
}