<?php
class Paginas extends Controlador
{
    public function  __construct(){

    }

    public function index(){
        $datos = [
            'Titulo' => 'Bienvenido',
        ];

        $this->vista("paginas/inicio", $datos);
    }
}