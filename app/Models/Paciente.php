<?php
namespace App\Models;

use CodeIgniter\Model;

class Paciente extends Model{
    protected $table    = 'pacientes';

    protected $primaryKey = 'id';
    protected $allowedFields=['name','date_birth','gender','height','weight'];
    
}