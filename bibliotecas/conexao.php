<?php

class Conexao {

    private $Conexao;

    function __construct() {
        $this->Conexao = new PDO("pgsql:host=localhost;port=5432;dbname=quizz;user=postgres;password=postgres");                
    }

    public function getConexao() {
        return $this->Conexao;
    }    

}