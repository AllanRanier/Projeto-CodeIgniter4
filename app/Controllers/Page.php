<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Page extends Controller
{
	public function index()
	{
		echo view('login/login');
	}

	// public function register()
	// {
	// 	helper(['form']);
	// 	$data = [];
	// 	$model = new LoginModel();

	// 	if ($this->request->getMethod() == 'post') {
	// 		$rules = [
	// 			'usuario' => 'required',
	// 			'senha' => 'required',
	// 		];
	// 		if ($this->validate($rules)) {
	// 			$model->save([
	// 				'usuario'  => $this->request->getVar('usuario'),
	// 				'senha'  => $this->request->getVar('senha'),
	// 			]);
	// 		}
	// 	}
	// 	echo view('login/register', $data);
	// }


	// public function home()
	// {
	// 	echo view('templates/header');
	// 	echo view('templates/left');
	// 	echo view('templates/footer');
	// }


	// public function logar()
	// {
	// 	$data = $this->request->getPost();
	// 	$loginModel = new LoginModel();

	// 	$login = $loginModel->where([
	// 		'usuario' => $data['usuario'],
	// 		'senha' => $data['senha']
	// 	])->first();

	// 	if ($login != NULL) {
	// 		return $this->home();
	// 	}
	// }

	// public function dashboard()
	// {
	// 	echo view('templates/header');
	// 	echo view('templates/left');
	// 	echo view('dashboard');
	// 	echo view('templates/footer');
	// }


	// public function cadastroClientes()
	// {
	// 	echo view('templates/header');
	// 	echo view('templates/left');
	// 	echo view('cadastro_clientes');
	// 	echo view('templates/footer');
	// }

	// public function cadastrarClientes()
	// {
	// 	helper(['form']);
	// 	// $data = [];
	// 	$CadastroModel = new CadastroModel();

	// 	if ($this->request->getMethod() === 'post') {

	// 		$rules = [
	// 			'nome' => 'required',
	// 			'cpf' => 'required',
	// 			'email' => 'required',
	// 			'nascimento' => 'required',
	// 			'cep' => 'required',
	// 			'cidade' => 'required',
	// 			'uf' => 'required',
	// 			'logradouro' => 'required'
	// 		];
	// 		if ($this->validate($rules)) {
	// 			$CadastroModel->save([
	// 				'nome'  => $this->request->getVar('nome'),
	// 				'cpf'  => $this->request->getVar('cpf'),
	// 				'email'  => $this->request->getVar('email'),
	// 				'nascimento'  => $this->request->getVar('nascimento'),
	// 				'cep'  => $this->request->getVar('cep'),
	// 				'cidade'  => $this->request->getVar('cidade'),
	// 				'uf'  => $this->request->getVar('uf'),
	// 				'logradouro'  => $this->request->getVar('logradouro'),
	// 			]);

	// 			echo view('templates/header');
	// 			echo view('templates/left');
	// 			echo view('cadastro_clientes');
	// 			echo view('templates/footer');
	// 		}
	// 	}
	// }



	// public function clienteCadastrado()
	// {
	// 	echo view('templates/header');
	// 	echo view('templates/left');
	// 	echo view('cliente_cadastrado');
	// 	echo view('templates/footer');
	// }
}
