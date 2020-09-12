<?php
require_once('biblioteca/Autoload.php');
abstract class ControllerRequisicao {

    public function processaRequisicao() {
        switch($_SERVER["REQUEST_METHOD"]) {
            case 'GET':
                $xRetorno = $this->processaBuscaDados();
                break;
            case 'POST':
                $xRetorno = $this->processaInclusaoDados();
                break;
        }
    }

    public function processaBuscaDados() {

    }

    public function processaInclusaoDados() {

    }

}
$oControllerRequisicao = new ControllerRequisicao();
$oControllerRequisicao->processaRequisicao();