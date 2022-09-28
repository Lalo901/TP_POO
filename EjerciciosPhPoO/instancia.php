<?php
require_once ('ejercicios1.php');



class MiUsuario extends Usuario {
    private $dni;
    public $telefono;

    public function __construct ($dni, $telefono){
        $this -> dni = $dni;
        $this -> telefono = $telefono;
    }

    public function getDni() { 
        return $this -> dni; 
    }
    public function getTelefono() {
        return $this -> telefono; 
    }
    // FUNCIONES MODIFICADORAS
    public function setTelefono($nro) { 
        $this -> telefono = $nro;
    }

   


    public function unaFuncionCualquiera( $name) {
        if($name =='Eduardo'){
            $this->nombreDeUsuario;
        }
        else{
            echo 'El nombre no exste';

        }
    
        
    }
    
}

?>