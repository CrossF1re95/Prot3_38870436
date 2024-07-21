<?php
namespace App\Models;
use CodeIgniter\Model;

Class user_Model extends Model
{
 protected $table = 'usuarios'; //nombre de la tabla
 protected $primaryKey = 'user_id'; //identificador de la tabla
 protected $allowedFields = ['user_name', 'user_lastname', 'user', 'user_email',
'user_pass','profile_id','baja']; //todos los campos de la tabla
}
