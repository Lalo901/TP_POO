<?php
    Class Banco{
        //private $nombre;
        //private $direccion;
       

        public function  __construct ( $nombre, private $direccion, )
        {
            $this -> nombre= $nombre;
            $this -> direccion= $direccion;
            
        }

        public function getNombre(){
            return $this->nombre;
        }
        public function getDireccion(){
            return $this->direccion;
        }
    }

    //$banco = new Banco('Galicia', 'Pinto 300');

    //echo 'El banco '.$banco->getNombre().' esta en la calle '. $banco->getDireccion()."\n";


?>