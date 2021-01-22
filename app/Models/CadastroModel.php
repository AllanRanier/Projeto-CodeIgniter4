<?php

namespace App\Models;

use CodeIgniter\Model;

class CadastroModel extends Model
{

    protected $table = 'usuario';
    protected $primaryKey = 'id';


    protected $allowedFields = [
        'nome',
        'cpf',
        'email',
        'nascimento',
        'cep',
        'cidade',
        'uf',
        'logradouro'
    ];
}
