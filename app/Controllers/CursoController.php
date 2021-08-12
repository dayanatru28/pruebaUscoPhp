<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CursosModel;

class CursoController extends BaseController
{

    
	public function index()

	{
        $cursoModel=new CursosModel($db);
        $cursos=$cursoModel->findAll();
        $cursos=array('cursos'=>$cursos);
        $estructura=view('head').view('Cursos',$cursos);
        return $estructura;
	}

    public function formulario(){
        $estructura=view('head').view('NuevoCurso');
        return $estructura;
    }

    public function insertar(){
        $request=\Config\Services::request();
        $data=[
             'nombreCurso'=>$request->getPostGet('nombreCurso')
        ];
        $cursoModel=new CursosModel($db);
        $cursoModel->insert($data);

        $cursos=$cursoModel->findAll();
        $cursos=array('cursos'=>$cursos);
        $estructura=view('head').view('Cursos',$cursos);
        return $estructura;

    }

    public function formEditar(){
        $cursoModel=new CursosModel($db);
        $request=\Config\Services::request();
        $idCurso=$request->getPostGet('idCurso');
        $cursos=$cursoModel->find([$idCurso]);
        $cursos=array('cursos'=>$cursos);
        $estructura=view('head').view('editarCurso',$cursos);
        return $estructura;

    }

    
	public function editar(){

		$request=\Config\Services::request();
        $cursoModel=new CursosModel($db);
		$data = array(
            'nombreCurso'=>$request->getPostGet('nombreCurso')
        );
        if($request->getPostGet('idCurso')){
			$data['idCurso']=$request->getPostGet('idCurso');
		}
        if($cursoModel->save($data)===false)	{
            echo "Error";
        }
        else{
            $cursos=$cursoModel->findAll();
            $cursos=array('cursos'=>$cursos);
            $estructura=view('head').view('Cursos',$cursos);
            return $estructura;
        }
    }

    public function eliminar(){

		$request=\Config\Services::request();
        $cursoModel=new CursosModel($db);
		$idCurso=$request->getPostGet('idCurso');
		$cursoModel->delete($idCurso);
		
        
            $cursos=$cursoModel->findAll();
            $cursos=array('cursos'=>$cursos);
            $estructura=view('head').view('Cursos',$cursos);
            return $estructura;
        
    }


}