<?php

namespace App\Controllers;

//Se trae (Importa) el modelo de datos
use App\Models\AnimalModelo;

class Animales extends BaseController
{
    public function index()
    {
        return view('registroAnimales');
    }

    public function registrarAnimales(){
        
        //1. Recibo todos los datos enviados desde el formulario (vista)
        //Lo que tengo entre getPost("") es el name que puse en cada input
        $nombre=$this->request->getPost("nombre");
        $edad=$this->request->getPost("edad");
        $descripcion=$this->request->getPost("descripcion");
        $tipoAnimal=$this->request->getPost("tipoAnimal");

        //2. Valido que llegó

        if($this->validate('animales')){

            //3.Se organizan los datos en un array
            //los naranjados (claves) deben coincidir
            //con el nombre de las columnas de la BD
            $datos=array(

                "nombre"=>$nombre,
                "edad"=>$edad,
                "descripcion"=>$descripcion,
                "tipoAnimal"=>$tipoAnimal,
    
            );

            //4.Intentamos grabar los datos en BD
            try{

                $modelo=new AnimalModelo();
                $modelo->insert($datos);
                return redirect()->to(site_url('/animales/registro'))->with('mensaje',"Exito al agregar el animal");

            }catch(\Exception $error){

                return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());

            }


        }else{

            $mensaje="No puedes dejar campos sin llenar";
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$mensaje);

        }
       
        print_r($datos);

    }

    public function buscarAnimales(){
        try{

            $modelo=new AnimalModelo();
            $resultado=$modelo->findAll();
            $animales=array('animales'=>$resultado);
            return view('listaAnimales',$animales);

        }catch(\Exception $error){

            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());

        }
    }

    public function eliminar($id){

        try{

            $modelo=new AnimalModelo();
            $modelo->where('id',$id)->delete();
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',"Exito al eliminar el animal");

        }catch(\Exception $error){

            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());

        }

    }
}