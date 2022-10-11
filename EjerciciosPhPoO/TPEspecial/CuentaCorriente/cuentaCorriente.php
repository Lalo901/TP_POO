<?php

namespace Banco;
namespace CuentaBancaria;
namespace Clientes;
/*
include_once'banco.php';
include_once'cliente.php';
include_once'cuentaBancaria.php';*/

//hereda de Cuenta Bancaria
class CuentaCorriente extends CuentaBancaria{
    
    private $nroCheque; // pagos

    public function __construct($nroCta, $fechaApertura, $saldo, $cbu, $nroCheque){
        parent::construct($nroCta, $fechaApertura, $saldo, $cbu);
        $this->color=$nroCheque;
    }
    

    public function extraer($extraccion){
        $this->saldo -= $extraccion;

    }
}

?>