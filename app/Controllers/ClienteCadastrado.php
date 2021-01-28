<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ClienteCadastrado extends Controller
{
    public function clienteCadastrado()
	{
		echo view('templates/header');
		echo view('templates/left');
		echo view('clientes_cadastrado/cliente_cadastrado');
		echo view('templates/footer');
	}
}