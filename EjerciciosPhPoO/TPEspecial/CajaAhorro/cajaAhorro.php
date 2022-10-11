<?php
namespace Banco;
namespace CuentaBancaria;
namespace Clientes;
/*
include_once "TPEspecial/Banco/banco.php";
//include_once "Clientes/cliente.php";
include_once "TPEspecial/CuentaBancaria/cuentaBancaria.php";

use TPEspecial\Banco\banco;
use TPEspecial\CuentaBancaria\cuentaBancaria;*/

class CajaAhorro extends CuentaBancaria{

    private $interesMensual= 5;
    
    public function __construct($nroCta, $fechaApertura, $saldo, $cbu,$interesMensual){
        parent::construct($nroCta, $fechaApertura, $saldo, $cbu);
        $this-> interesMensual= $interesMensual;
    }
    public function getInteresMensual(){
        $this -> interesMensual =$interesMensual;
    }
    public function setInteresMensual($intMensual){
        $this -> interesMensual =$intMensual;
    }

    public function obtenerInteres($dias){
        $this->interesMensual= (($interesMensual/100) * 1/365);
        if ($this->saldo > 0){
            $interes= $this->saldo * $this->InteresMensual * $dias;
            echo"el importe del mes es ".$interes;
        }
    }

    public function extraer($importe){
        
        if($this->saldo > $importe){
            $this -> saldo -= $importe;

        }else{
            echo 'No se puede realizar la operacion usted no tiene saldo disponible.'."\n";
            echo 'Su saldo es: '. $this->saldo;

        }
  
    }

}


?>