<?php
/**
 * Classe para realizar a conexão com o banco de dados.
 */
class Conexao {

    private $conexao;

    public function __construct() {
        $this->setConexao($this->getInstanceConnection());
    }
    
    public function setConexao($conexao) {
        $this->conexao = $conexao;
    }

    public function getConexao() {
        return $this->conexao;
    }

    public function getInstanceConnection() {
        return pg_connect("host=localhost port=5432 dbname=quizz user=postgres password=postgres");
    }

}