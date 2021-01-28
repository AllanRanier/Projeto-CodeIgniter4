<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class DashBoard extends Controller
{

    public function dashboard()
	{
		echo view('templates/header');
		echo view('templates/left');
		echo view('dashboard/dashboard');
		echo view('templates/footer');
	}
}

