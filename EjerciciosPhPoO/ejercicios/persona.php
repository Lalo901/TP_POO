"<?php

Class Persona{

    private $nombre;
    private $apellido;
    private $edad;

    public function __construct($nombre, $apellido, $edad){

        $this->nombre= $nombre;
        $this->apellido= $apellido;
        $this->edad= $edad;
    }

  
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function mayorEdad(){
        if($this->edad >= 18){
            echo $this->getNombre().' sos mayor de edad'."\n";
        }
        else{
            echo $this->getNombre().' sos menor de edad'."\n";
        }
    }

    public function nombreCompleto(){

        echo 'El nombre completo es: '.$this->getNombre().' '.$this->getApellido()."\n";
    }


}
// funciona ok
$persona= new Persona('Eduardo', 'Farfan', 46);

echo 'El nombre es: '.$persona->getNombre().' '.$persona->getApellido()."\n";
$persona->setNombre('Teodoro');
$persona->setApellido('Nafran');
$persona->setEdad(64);
echo 'El nombre es: '.$persona->getNombre().' '.$persona->getApellido()."\n";
$persona->mayorEdad();
$persona->nombreCompleto();


?>