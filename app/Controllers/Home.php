<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AgendaColegio;
use App\Models\SalonModel;
use App\Models\CursosModel;
use App\Models\ProfesoresModel;
use App\Models\GruposModel;

class Home extends BaseController
{
	public function index()
	{
		$agendaColegio= new AgendaColegio($db);
		$datos=$agendaColegio->findAll();
		$datos=array('datos'=>$datos);
        $estructura=view('head').view('Agenda',$datos);
        return $estructura;
	}


	public function formulario()
	{
		//salones
		$SalonModel= new SalonModel($db);
        $SalonModel=$SalonModel->findAll();
        $SalonModel=array('Salones'=>$SalonModel);
		$Datos['Salones']=$SalonModel;

		//curso
		$CursosModel=new CursosModel($db);
		$CursosModel=$CursosModel->findAll();
		$CursosModel=array('Cursos'=>$CursosModel);
		$Datos['Cursos']=$CursosModel;

		//profesores
		$ProfesoresModel=new ProfesoresModel($db);
		$ProfesoresModel=$ProfesoresModel->findAll();
		$ProfesoresModel=array('Profesores'=>$ProfesoresModel);
		$Datos['Profesores']=$ProfesoresModel;

		//Grupo
		$GruposModel=new GruposModel($db);
		$GruposModel=$GruposModel->findAll();
		$GruposModel=array('Grupos'=>$GruposModel);
		$Datos['Grupos']=$GruposModel;

		$estructura=view('head').view('NuevaAgenda',$Datos);
        return $estructura;

	}

	public function insertar(){
		$agendaColegio= new AgendaColegio($db);
		$request=\Config\Services::request();
        $data=[
             'idSalon'=>$request->getPostGet('idSalon'),
			 'idCurso'=>$request->getPostGet('idCurso'),
			 'idProfesor'=>$request->getPostGet('idProfesor'),
			 'idGrupo'=>$request->getPostGet('idGrupo'),
			 'fecha'=>$request->getPostGet('trip-start1'),
			 'hora'=>$request->getPostGet('limitetiempo')  
        ];

		$info=$agendaColegio->findAll();
		$infor=array('datos'=>$info);

		$num4=0;
		$num5=0;
		
		foreach($infor as $info){
		
		for ($i=0; $i <count($info); $i++) {  

			if(($info[$i]['hora']!=$data['hora'])==1 or ($info[$i]['idSalon']!=$data['idSalon'])==1 or ($info[$i]['fecha']!=$data['fecha'])){

			// if($info[$i]['hora']!=$data['hora']){
			// 	$num1=1;}else{	$num1=0;
			// }
			// if($info[$i]['idSalon']!=$data['idSalon']){
			// 	$num2=1;}else{	$num2=0;
			// }
			// if($info[$i]['fecha']!=$data['fecha']){
			// 	$num3=1;}else{ $num3=0;
			// }
			
			// if($num1==1 or $num2==1 or $num3==1){
				$num4=$num4+1;}else{ $num4=$num4;
			}
			if((($info[$i]['hora']!=$data['hora'])==1 or ($info[$i]['fecha']!=$data['fecha'])==1 or ($info[$i]['idGrupo']!=$data['idGrupo'])==1 )){
				$num5=$num5+1;}else{$num5=$num5;}
			}
		}
		if ($num4!=count($info)){
			echo "<script>alert('Datos se cruzan, ¡Ingrese con otro horario o fecha!.');</script>";
		$datos=$agendaColegio->findAll();
		$datos=array('datos'=>$datos);
		$estructura=view('head').view('Agenda',$datos);
		return $estructura;				
		}
		if($num5!=count($info)){
			echo "<script>alert('Datos se cruzan, ¡El mismo Grupo se asigno con hora y fecha!.');</script>";
		$datos=$agendaColegio->findAll();
		$datos=array('datos'=>$datos);
		$estructura=view('head').view('Agenda',$datos);
		return $estructura;	

		}
		else
			$agendaColegio->insert($data);
			$datos=$agendaColegio->findAll();
			$datos=array('datos'=>$datos);
			$estructura=view('head').view('Agenda',$datos);
			return $estructura;
		
	}


	public function eliminar(){
		$agendaColegio= new AgendaColegio($db);
		$request=\Config\Services::request();
		$id=$request->getPostGet('id');
		$agendaColegio->delete($id);

		$datos=$agendaColegio->findAll();
		$datos=array('datos'=>$datos);
        $estructura=view('head').view('Agenda',$datos);
        return $estructura;


	}
}
