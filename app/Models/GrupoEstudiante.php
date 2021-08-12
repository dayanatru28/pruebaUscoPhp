<?php namespace App\Models;

use CodeIgniter\Model;

class GrupoEstudiante extends Model{

    protected $table = 'grupo_est';
    protected $primaryKey = 'idRelacion';

    protected $returnType = 'array';
    protected $allowedFields=['idGrupo','idEstudiante'];




}