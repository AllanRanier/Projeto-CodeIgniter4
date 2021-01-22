<?php 
namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{

    protected $table = 'login';
    protected $primaryKey = 'id';
    protected $usuario = 'usuario';
    protected $senha = 'senha';
    protected $allowedFields = ['usuario', 'senha'];

}