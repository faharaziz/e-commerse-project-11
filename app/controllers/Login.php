<?php

// Update November 2024

namespace App\Controllers;

use App\Core\Controller;

class Login extends Controller
{
	public object $model;

	public function __construct()
	{
		$this->model = new \App\Models\Login();
	}

	public function index()
	{
		$this->dashboard('login/index');
	}

    public function proses()
    {
        $user = $this->model->proses();
        if (!empty($user)) {

            //session untuk user yang login
            $_SESSION['user'] = $user;
            
            header('location:../dashboard');
        } else {
            header('location:../login');
        }
    }
}