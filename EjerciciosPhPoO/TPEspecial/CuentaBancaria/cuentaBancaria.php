<?php

namespace Banco;
namespace CuentaBancaria;
namespace Clientes;
//include_once('banco.php');
//include_once('cliente.php');

abstract class CuentaBancaria{

    private $nroCta;
    private $fechaApertura;
    private $saldo=0;
    private $cbu;
    //private Clientes cliente; agregacion
    

    public function __construct($nroCta, $fechaApertura, $saldo, $cbu){
        
        $this-> nroCta= $nroCta;
        $this-> fechaApertura = $fechaApertura;
        $this-> saldo= $saldo;
        $this-> cbu= $cbu;
       
    }

    public function getNroCta(){
        return $this -> nroCta;
    }

    public function getFechaApertura(){
        return $this -> fechaApertura;
    }

    public function getSaldo()
    {
        return $this -> saldo;
    }

    
    public function getCbu() {
        return $this->cbu;
    }

    private function depositar($deposito){

        $this-> saldo += $deposito;
    }

    //add el obj cja ahorro al array clientes
    public function agregarClientes($cliente){
        $this->cliente[]=$cliente;
    }
   
    abstract public function extraer($extraccion);




}


?>