<?php
//cargamos las librerias
require_once 'config/configurar.php';
require_once 'librerias/Base.php';
require_once 'librerias/controlador.php';
require_once 'librerias/Core.php';


//Autoload php
spl_autoload_register(function ($nombreClase){
   require_once 'librerias/' . strtolower($nombreClase) . '.php';
});