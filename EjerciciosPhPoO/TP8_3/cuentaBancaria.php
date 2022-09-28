<?php
include_once('banco.php');
include_once('cliente.php');

abstract class CuentaBancaria{

    private $banco;
    private $nroCta;
    private $cbu;
    private $saldo=0;

    public function __construct($banco, $nroCta,$cbu,$saldo){
        $this->banco=$banco;
        $this-> nroCta= $nroCta;
        $this-> cbu= $cbu;
        $this-> saldo= $saldo;
    }

    public function getBanco(){
        return $this->banco;
    }

    public function getNroCta(){
        return $this->nroCta;
    }

    public function getCbu()
    {
        return $this->cbu;
    }

    
    public function getSaldo()
    {
        return $this->saldo;
    }

    private function depositar($deposito){

        $this-> saldo += $deposito;
    }

    abstract public function extraer($extraccion);


}

//hereca de Cuenta Bancaria
class CuentaCorriente extends CuentaBancaria{
    
    public function __construct(){
        parent::construct();
    }
   

    public function extraer($extraccion){
        $this->saldo-= $extraccion;

    }
}


class CajaAhorro extends CuentaBancaria{
    
    public function __construct(){
        parent::construct();
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