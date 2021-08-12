<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\GruposModel;
use App\Models\GrupoEstudiante;
class EstGrupoController extends BaseController
{

    
	public function index()
	{
        $grupoEModel=new GruposModel($db);
        $grupos=$grupoEModel->findAll();
        $grupos=array('grupos'=>$grupos);
        $estructura=view('head').view('GrupoBuscar',$grupos);
        return $estructura;

    }

    public function buscar()
	{
        $grupoEModel=new GrupoEstudiante($db);
        $request=\Config\Services::request();
        $idGrupo=$request->getPostGet('idGrupo');
		$datos=$grupoEModel->where('idGrupo', $idGrupo)->findAll();
		$datos=array('datos'=>$datos);
        $estructura=view('head').view('EstudiantesporGrupo',$datos);
        return $estructura;

    }
}