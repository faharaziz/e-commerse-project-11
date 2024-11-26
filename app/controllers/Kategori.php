<?php

// Update November 2024

namespace App\Controllers;

use App\Core\Controller;

class Kategori extends Controller
{
	public object $model;

	public function __construct()
	{
		$this->model = new \App\Models\Kategori();
	}

	public function index()
	{
		$data['rows'] = $this->model->tampil();
		$this->dashboard('kategori/index', $data);
	}

	public function input()
	{
		$this->dashboard('kategori/input');
	}

	public function simpan()
	{
		$this->model->simpan();
		header('location:kategori');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('kategori/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:kategori');
	}
}
