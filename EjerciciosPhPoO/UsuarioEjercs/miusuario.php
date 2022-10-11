<?php
include_once('ejercicios1.php');
include_once('instancia.php');


$usuario = new Usuario ('Eduardo', 12548);

echo "Nombre de usuario: ". $usuario->getNombreDeUsuario()."\n";
echo 'Palabra clave del usuario: '. $usuario->getPalabraClave(). "\n";
$usuario->setNombreDeUsuario('chanquete');
$usuario->setPalabraClave(25486);

echo " \n";
echo "Nombre de usuario: ". $usuario->getNombreDeUsuario()."\n";
echo 'Palabra clave del usuario: '. $usuario->getPalabraClave(). "\n";


$otrousuario = new MiUsuario ('juan', 123456, 25106489, '74236548');

echo 'El nombre de miusuario es: '. $otrousuario->getNombreDeUsuario()."\n";
echo 'La key : '. $otrousuario->getPalabraClave(). "\n";





?>