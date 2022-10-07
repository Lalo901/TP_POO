<?php
include_once('banco.php');
include_once('cliente.php');
include_once('cuentaBancaria.php');

class CajaAhorro extends CuentaBancaria{

    private $interesMensual= 2;
    
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
