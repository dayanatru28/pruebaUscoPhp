<?php namespace App\Models;

use CodeIgniter\Model;

class CursosModel extends Model{

    protected $table = 'curso';
    protected $primaryKey = 'idCurso';

    protected $returnType = 'array';
    protected $allowedFields=['nombreCurso'];




}