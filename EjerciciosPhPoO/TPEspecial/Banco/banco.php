<?php
    namespace interfaz;
    //include_once "mostrable/mostrable.php";

    Class Banco implements Mostrable{
        private $nombre;
        private $direccion;
        private $cuenta = array();
      
      
        public function  __construct ( $nombre, $direccion){
            $this -> nombre= $nombre;
            $this -> direccion= $direccion;
        }

        public function getNombre(){
            return $this->nombre;
        }
        public function getDireccion(){
            return $this->direccion;
        }

        public function agregarCuenta($cuenta){
            $this->cuentas[]= $cuenta;
        }

        public function mostrar(){
            echo "El nombre del Banco es: " .$this->getNombre()."la direccion es ". $this->getDireccion();
        }


    }
/*
    $banco = new Banco('Galicia', 'Pinto 300');
    $cuenta=new CajaAhorro($nroCta, $fechaApertura, $saldo, $cbu,$interesMensual);
    $banco->agregarCuenta($cuenta);
    //echo 'El banco '.$banco->getNombre().' esta en la calle '. $banco->getDireccion()."\n";

*/
?>