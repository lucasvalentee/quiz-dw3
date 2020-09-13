<?php
require_once('biblioteca/Autoload.php');
$oControllerQuiz = new ControllerQuiz();
class ControllerQuiz {

    public function __construct() {
        $this->verificaRequisicao();        
    }

    public function verificaRequisicao() {        
        $oConexao = new Conexao();
        pg_query($oConexao->getConexao(), "insert into public.tbusuario (usunome, usuemail, ususenha) VALUES ('Kevin', 'email@teste.com', 'senha')");
        // pg_close();


        echo json_encode(true);
    }

    private function insereRegistro() {
                     
    }

    private function listaRegistro() {

    }
  
}