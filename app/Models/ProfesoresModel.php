<?php namespace App\Models;

use CodeIgniter\Model;

class ProfesoresModel extends Model{

    protected $table = 'profesores';
    protected $primaryKey = 'idProfesor';

    protected $returnType = 'array';
    protected $allowedFields=['nombreProfesor'];




}