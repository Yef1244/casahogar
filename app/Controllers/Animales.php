<?php

namespace App\Controllers;

class Animales extends BaseController
{
    public function index()
    {
        return view('registroAnimales');
    }

    public function registrarAnimales(){
        
        //1. Recibo todos los datos enviados desde el formulario (vista)
        //Lo que tengo entre getPost("") es el name que puse en cada dato del formulario
        $nombre=$this->request->getPost("nombre");
        $edad=$this->request->getPost("edad");
        $descripcion=$this->request->getPost("descripcion");
        $tipoAnimal=$this->request->getPost("tipoAnimal");

        //2. Valido que llegó

        if($this->validate('animales')){

            $mensaje=("Se registro el animal correctamente");
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$mensaje);

        }else{

            $mensaje="No puedes dejar campos sin llenar";
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$mensaje);

            //echo("Tienes datos pendientes");

        }

        //3. Crear un arreglo asociativo con los datos del punto 1
        $datos=array(

            "nombre"=>$nombre,
            "edad"=>$edad,
            "descripcion"=>$descripcion,
            "tipoAnimal"=>$tipoAnimal,

        );

        print_r($datos);

    }
}