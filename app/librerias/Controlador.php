<?php
//clase controlador principal
//se encarga de cargar los modelos y las vistas
class Controlador
{
    //Cargar Modelo
    public function modelo($modelo){
        //carga modelo
        require_once '../app/modelos/' . $modelo . '.php';
        //instanciar el modelo
        return new $modelo();

    }
    public function vista($vista, $datos = []){
        //chequear si el archivo existe
        if (file_exists('../app/vistas/' . $vista . '.php')) {
            require_once '../app/vistas/' . $vista . '.php';
        }else{
            //si el archivo de la vista no existe
            die('La Vista no existe');
        }

    }




}