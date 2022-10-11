<?php

namespace Banco;
namespace CuentaBancaria;


Class Cliente{
    
    private $nombre;
    private $apellido;
    private $dni;
    private $user;
    private $password;
   // private $cajasAhorros=array();//varias cjas ahorros
    //private $cuentasCorrientes= array();//idem cja ahorro

    public function __construct($nombre, $apellido, $dni, $cajaAhorro, $cuentaCorriente){//recibe el obj cja ahorro y cta cte
        $this-> nombre= $nombre;
        $this-> apellido= $apellido;
        $this-> dni= $dni;
        
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }
   
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellido){
        $this -> apellido = $apellido;
    }

    public function getDni(){
        return $this->dni;
    }
    
    



}

?>