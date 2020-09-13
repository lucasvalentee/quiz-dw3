<?php
require_once('../biblioteca/Autoload.php');
$oControllerQuiz = new ControllerQuiz();
class ControllerQuiz {

    private $Conexao;

    public function __construct() {
        $this->Conexao = new Conexao();
        $this->verificaRequisicao();                 
    }

    public function verificaRequisicao() {                
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->insereRegistro();
        } else {
            $this->listaRegistro();
        }                
    }

    private function insereRegistro() {
        pg_query($this->Conexao->getConexao(), "INSERT INTO tbresposta VALUES ('{$_POST['usuario']}', '{$_POST['pergunta']}', '{$_POST['resposta']}')");      
    }

    private function listaRegistro() {
        //$iUsuario = $_GET['usuario'];
        $iUsuario = 1;
        $oQuery = pg_query($this->Conexao->getConexao(), "SELECT * FROM tbresposta WHERE usucodigo = '{$iUsuario}' ORDER BY 2");
        $oRegistros = pg_fetch_all($oQuery);
        echo json_encode($oRegistros);

    }
  
}