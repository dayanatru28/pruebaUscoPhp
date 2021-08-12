<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AgendaColegio;
use App\Models\SalonModel;

class RegistrosController extends BaseController
{
	public function index()
	{
        $salonModel=new SalonModel($db);
        $salonModel=$salonModel->findAll();
        $salones=array('salones'=>$salonModel);
        $estructura=view('head').view('RegistroBuscar',$salones);
        return $estructura;
	}

    public function buscar(){

        $agendaColegio= new AgendaColegio($db);
        $request=\Config\Services::request();
        $idSalon=$request->getPostGet('idSalon');
		$datos=$agendaColegio->where('idSalon', $idSalon)->findAll();
		$datos=array('datos'=>$datos);
        $estructura=view('head').view('Registros',$datos);
        return $estructura;

    }
}