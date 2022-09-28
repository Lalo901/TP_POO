<?php

Class Cliente{
    
    private $nombre;
    private $apellido;
    private $cuil;
    private $cajasAhorros=array();//varias cjas ahorros
    private $cuentasCorrientes= array();//idem cja ahorro

    public function __construct($nombre, $apellido, $cuil, $cajaAhorro, $cuentaCorriente){//recibe el obj cja ahorro y cta cte
        $this-> nombre= $nombre;
        $this-> apellido= $apellido;
        $this-> nombre= $nombre;
        $this-> cajasAhorros= $cajaAhorro;
        $this-> cuentasCorrientes= $cuentaCorriente;
    }

    public function getNombre(){
        return $this->nombre;
    }
   
    public function getApellido(){
        return $this->apellido;
    }

    public function getCuil(){
        return $this->cuil;
    }
    
    public function getCajasAhorros()
    {
        return $this->cajasAhorros;
    }
   
    public function getCuentasCorrientes()
    {
        return $this->cuentasCorrientes;
    }
//add el obj cja ahorro al array cjas ahorros
    public function agregarCajaAhorro($cajaAhorro){
        $this->cajasAhorros[]=$cajaAhorro;
    }

    public function agregarCuentaCorriente($cuentaCorriente){
        $this->cuentasCorrientes[]=$cuentaCorriente;
    }


}

?>