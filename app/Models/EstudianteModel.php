<?php namespace App\Models;

use CodeIgniter\Model;

class EstudianteModel extends Model{

    protected $table = 'estudiantes';
    protected $primaryKey = 'idEstudiante';

    protected $returnType = 'array';
    protected $allowedFields=['nombreEstudiante'];




}