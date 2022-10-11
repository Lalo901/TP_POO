<?php

require_once("autoload.php");

use \Banco\Banco;
use \CajaAhorro\CajaAhorro;
use \Clientes\Cliente;
use \CuentaBancaria\CuentaBancaria;
use \CuentaCorriente\CuentaCorriente;
use \interfaz\Mostrable;


//$banco = new Banco('Galicia', 'Pinto 300');
//$cuenta=new CajaAhorro($nroCta, $fechaApertura, $saldo, $cbu,$interesMensual);
//$banco->agregarCuenta($cuenta);
 //echo 'El banco '.$banco->getNombre().' esta en la calle '. $banco->getDireccion()."\n";

$cajaAhorro1 = new CajaAhorro(25486,'08/09/2022', 20000, 7700095);

echo $cajaAhorro1-> obtenerInteres(30);
// echo $banco->mostrar();