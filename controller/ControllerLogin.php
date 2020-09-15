<?php
require_once('../biblioteca/Autoload.php');

$oControllerLogin = new ControllerLogin();

class ControllerLogin {

    private $Conexao;

    public function __construct() {
        $this->Conexao = new Conexao();
        $this->validaUserLogin();        
    }

    public function insertUserLogin() {
        
    }

    private function validaUserLogin() {
        $sLogin = $_POST['login'];
        $sSenha = $_POST['senha'];
        $oQuery = pg_query($this->Conexao->getConexao(), "SELECT * FROM tbusuario");
        while ($aDados = pg_fetch_assoc($oQuery)) {
            $bLogin = $aDados['usunome'];
            $bSenha = $aDados['ususenha'];
            if ($sLogin == $bLogin && $sSenha == $bSenha) {
                $_SESSION['login'] = $sLogin;
                $_SESSION['senha'] = $sSenha;                
                echo json_encode('true');
            } else {
                echo json_encode('false');
            }
        }
    }

}