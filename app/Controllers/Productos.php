<?php

namespace App\Controllers;

//Se trae (Importa) el modelo de datos
use App\Models\ProductoModelo;

class Productos extends BaseController
{
    public function index()
    {
        return view('registroProductos');
    }

    public function registrarProductos(){
        
        //1. Recibo todos los datos enviados desde el formulario (vista)
        //Lo que tengo entre getPost("") es el name que puse en cada input
        $producto=$this->request->getPost("producto");
        $foto=$this->request->getPost("foto");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        //2. Valido que llegó

        if($this->validate('producto')){

            //3.Se organizan los datos en un array
            //los naranjados (claves) deben coincidir
            //con el nombre de las columnas de la BD
            $datos=array(

                "producto"=>$producto,
                "foto"=>$foto,
                "precio"=>$precio,
                "descripcion"=>$descripcion,
                "tipo"=>$tipo,
    
            );

            //4.Intentamos grabar los datos en BD
            try{

                $modelo=new ProductoModelo();
                $modelo->insert($datos);
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',"Exito al agregar el producto");

            }catch(\Exception $error){

                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());

            }

        }else{

            $mensaje="No puedes dejar campos sin llenar";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

        }
        
        

    }

    public function buscarProductos(){
        try{

            $modelo=new ProductoModelo();
            $resultado=$modelo->findAll();
            $productos=array('productos'=>$resultado);
            return view('listaProductos',$productos);

        }catch(\Exception $error){

            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());

        }
        
    }

    public function eliminar($id){

        try{

            $modelo=new ProductoModelo();
            $modelo->where('id',$id)->delete();
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',"Exito al eliminar el producto");

        }catch(\Exception $error){

            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());

        }

    }

    public function editar($id){

        //Recibo datos
        $producto=$this->request->getPost("producto");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");

        //Validación de datos
        if($this->validate('producto2')){

            //3.Se organizan los datos en un array
            //los naranjados (claves) deben coincidir
            //con el nombre de las columnas de la BD
            $datos=array(

                "producto"=>$producto,
                "precio"=>$precio,
                "descripcion"=>$descripcion
    
            );

            //4.Intentamos grabar los datos en BD
            try{

                $modelo=new ProductoModelo();
                $modelo->update($id,$datos);
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',"Exito al editar el producto");
    
            }catch(\Exception $error){
    
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());
    
            }

        }else{

            $mensaje="No puedes dejar campos sin llenar";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

        }
        //Organizo los datos en un array asociativo

    }

}