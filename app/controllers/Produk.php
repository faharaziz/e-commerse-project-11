<?php

// Update November 2024

namespace App\Controllers;

use App\Core\Controller;

class Produk extends Controller
{
     public object $model;

     public function __construct()
     {
          $this->model = new \App\Models\Produk();
     }

     public function index()
     {
          $data['rows'] = $this->model->tampil();
          $this->dashboard('produk/index', $data);
     }

     public function input()
     {
          $data['listkategori'] = $this->model->listkategori();
          $this->dashboard('produk/input', $data);
     }

     public function simpan()
     {
          /* $this->model->simpan();
          header('location:Produk'); */
     }

     public function edit($id)
     {
          /* $data['row'] = $this->model->edit($id);
          $this->dashboard('produk/edit', $data); */
     }

     public function update()
     {
          /* $this->model->update();
          header('location:Produk'); */
     }
}
