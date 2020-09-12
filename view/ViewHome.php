<?php
class ViewHome {

    private $html;

    public function __construct() {
        $this->setHtml()  ;
    }        
    
    public function getHtml() {
        return $this->html;
    }

    public function setHtml() {
        $this->html = "
            <div class='text-center'>
                <button type='button' class='btn btn-primary mr-4' data-toggle='modal' data-target='#modalCadastros' id='btn-cadastro'>Cadastrar Quizz</button>
            </div>
        ";
    }
  
}