<?php 
    class Celular
    {
        private $marca;
        public $modelo;
        public $cor;
        public function ligar()
        {
            return "Celular ligado";
        }
        public function tirarFoto()
        {
            return "Foto tirada";
        }
        public function chamadaTelefonica()
        {
            return "Chamada efetuada";
        }

        public function marcaGet()
        {
            return $this->marca;
        }
        public function marcaSet($marca)
        {
            $this->marca = $marca;
        }

    }

    $celular = new Celular();
    echo $celular->ligar();
    echo PHP_EOL;
   // $celular->marca = "Xiaomi";
   $celular->marcaSet("Xiaomi");
    $celular->modelo = "Redmi 7A";
    $celular->cor = "Azul";

    echo $celular->marcaGet();