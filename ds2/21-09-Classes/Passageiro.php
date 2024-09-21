<?php 
    require_once ('Pessoa.php');
    class Passageiro extends Pessoa{
        public $id;
        public $cpf;
        private $avaliacao;
        public $historico;

        public function cancelarCorrida(){}

        public function setAvaliacao($avaliacao){
            $this->avaliacao = $avaliacao;
        }
        public function getAvaliacao(){
            return $this->avaliacao;
        }
    }