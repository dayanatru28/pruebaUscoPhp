<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\GrupoEstudiante;
use App\Models\GruposModel;
use App\Models\EstudianteModel;

class GrupoEstController extends BaseController
{

    
	public function index()
	{
        $grupoEModel=new GrupoEstudiante($db);
        $grupos=$grupoEModel->findAll();
        $grupos=array('grupos'=>$grupos);
        $estructura=view('head').view('Grupos',$grupos);
        return $estructura;
	}

        public function formulario(){
        $EstudiantesModel= new EstudianteModel($db);
        $EstudiantesModel=$EstudiantesModel->findAll();
        $EstudiantesModel=array('EstudiantesModel'=>$EstudiantesModel);

        $GruposModel= new GruposModel($db);
        $GruposModel=$GruposModel->findAll();
        $GruposModel=array('GruposModel'=>$GruposModel);

        $Datos['EstudiantesModel']=$EstudiantesModel;
        $Datos['GruposModel']=$GruposModel;

        $estructura=view('head').view('NuevoGrupoEst',$Datos);
        return $estructura;

        }

        public function insertar(){
        $grupoEModel=new GrupoEstudiante($db);
        $request=\Config\Services::request();
        $data=[
             'idGrupo'=>$request->getPostGet('idGrupo'),
             'idEstudiante'=>$request->getPostGet('idEstudiante')
        ];

        $grupoEModel->insert($data);

        $grupos=$grupoEModel->findAll();
        $grupos=array('grupos'=>$grupos);
        $estructura=view('head').view('Grupos',$grupos);
        return $estructura;

        }


        public function eliminar(){
                $request=\Config\Services::request();
                $grupoEModel=new GrupoEstudiante($db);
                $idRelacion=$request->getPostGet('idRelacion');
                $grupoEModel->delete($idRelacion);
                
                $grupos=$grupoEModel->findAll();
                $grupos=array('grupos'=>$grupos);
                $estructura=view('head').view('Grupos',$grupos);
                return $estructura;
        }

}
