<?php
    class Pessoa {
        public $nome;
        private $senha;
        public $email;
        
        public function atualizarDados(){}
        
        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function getSenha(){
            return $this->senha;
        }
    }