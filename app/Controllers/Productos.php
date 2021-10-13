<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        return view('registroProductos');
    }

    public function registrarProductos(){
        
        //1. Recibo todos los datos enviados desde el formulario (vista)
        //Lo que tengo entre getPost("") es el name que puse en cada dato del formulario
        $producto=$this->request->getPost("producto");
        $foto=$this->request->getPost("foto");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        //2. Valido que llegó

        if($this->validate('producto')){

            $mensaje=("Se registro el producto correctamente");
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

        }else{

            $mensaje="No puedes dejar campos sin llenar";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

            //echo("Tienes datos pendientes");

        }
        

        //3. Crear un arreglo asociativo con los datos del punto 1
        $datos=array(

            "producto"=>$producto,
            "foto"=>$foto,
            "precio"=>$precio,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo,

        );

        print_r($datos);
        

    }
}