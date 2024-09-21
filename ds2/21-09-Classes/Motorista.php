<?php
    require_once ('Pessoa.php');
    class Motorista extends Pessoa{
        public $id;
        public $cnh;
        private $avaliacao;
        public $historico;

        public function finalizarCorrida(){}
        public function cancelarCorrida(){}

        public function setAvaliacao($avaliacao){
            $this->avaliacao = $avaliacao;
        }
        public function getAvaliacao(){
            return $this->avaliacao;
        }
    }