<?php
/**
 * Classe para realizar a conexão com o banco de dados.
 */
class Conexao {

    /** @var PDO */
    private $conexao;

    public function __construct() {
        $this->setConexao($this->getInstanceConnection());
    }
    
    public function setConexao(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function getConexao() {
        return $this->conexao;
    }

    public function getInstanceConnection() {
        return new PDO("pgsql:host=localhost;port=5432;dbname=quizz;user=postgres;password=postgres");
    }

}