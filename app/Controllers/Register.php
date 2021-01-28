<?php

namespace App\Controllers;

use App\Models\CadastroModel;
use App\Models\LoginModel;
use CodeIgniter\Controller;

class Register extends Controller
{

    public function register()
	{
		helper(['form']);
		$data = [];
		$model = new LoginModel();

		if ($this->request->getMethod() == 'post') {
			$rules = [
				'usuario' => 'required',
				'senha' => 'required',
			];
			if ($this->validate($rules)) {
				$model->save([
					'usuario'  => $this->request->getVar('usuario'),
					'senha'  => $this->request->getVar('senha'),
				]);
			}
		}
		echo view('login/register', $data);
	}
}