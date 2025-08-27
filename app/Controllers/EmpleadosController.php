<?php

namespace App\Controllers;
use App\Models\EmpleadosModel;

class EmpleadosController extends BaseController
{
    public function index()
    {
        $empleado = new EmpleadosModel();
        $usuario = $this->request->getPost('txt_usuario');
        $pass= $this->request->getPost('txt_password');
        $datos= $empleado->where('codigo_empleado',$usuario)
        ->where('password',$pass)->first();
        $ubicacion="";
        if($datos){
            echo ("tipo de usuario: ". $datos['tipo_usuario']);
            if($datos['tipo_usuario']==1){
                $ubicacion="menu_admin";
            }elseif ($datos['tipo_usuario']==2){
                $ubicacion="menu_maestro";
            }elseif($datos['tipo_usuario']==3){
                $ubicacion="menu_biblio";
            }else{
                return redirect()->route('/');
            }
        }else{
            echo ("datos incorrectos");
            return redirect()->route('/');
        }
        return view($ubicacion);       
        
    }
}