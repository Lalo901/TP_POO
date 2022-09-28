<?php

class Usuario{
    private $nombreDeUsuario;
    private $palabraClave;
    
    // CONSTRUCTOR DE LA CLASE
    public function __construct ($nombreDeUsuario, $palabraClave) {
        $this -> nombreDeUsuario = $nombreDeUsuario;
        $this -> palabraClave = $palabraClave;

    }
   
    // FUNCIONES CONSULTORAS
    public function getNombreDeUsuario() { 
        return $this -> nombreDeUsuario; 
    }
    public function getPalabraClave() {
        return $this -> palabraClave; 
    }
    // FUNCIONES MODIFICADORAS
    public function setNombreDeUsuario($nu) { 
        $this -> nombreDeUsuario = $nu;
    }

    public function setPalabraClave($pc) { 
        $this -> palabraClave = $pc; 
    }

}




?>