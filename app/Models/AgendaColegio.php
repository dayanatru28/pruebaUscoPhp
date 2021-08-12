<?php namespace App\Models;

use CodeIgniter\Model;

class AgendaColegio extends Model{

    protected $table = 'agenda_colegio';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $allowedFields=['idSalon','idCurso','idProfesor','idGrupo','fecha','hora'];




}