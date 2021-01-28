<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Controller;

class Logar extends Controller
{

    
	public function home()
	{
		echo view('templates/header');
		echo view('templates/left');
		echo view('templates/footer');
	}


    public function logar()
	{
		$data = $this->request->getPost();
		$loginModel = new LoginModel();

		$login = $loginModel->where([
			'usuario' => $data['usuario'],
			'senha' => $data['senha']
		])->first();

		if ($login != NULL) {
			return $this->home();
		}
	}

}