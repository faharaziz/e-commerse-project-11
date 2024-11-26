<?php

// Update November 2024

namespace App\Models;

use App\Core\Model;

class Kategori extends Model
{

      public function tampil()
      {
            $sql = "SELECT * FROM tb_kategori";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function simpan()
      {
            $kat_nama = $_POST['kat_nama'];
            $kat_keterangan = $_POST['kat_keterangan'];

            $sql = "INSERT INTO tb_kategori SET kat_nama=:kat_nama, kat_keterangan=:kat_keterangan";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":kat_nama", $kat_nama);
            $stmt->bindParam(":kat_keterangan", $kat_keterangan);
            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_kategori WHERE kat_id=:kat_id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":kat_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $kat_nama = $_POST['kat_nama'];
            $kat_keterangan = $_POST['kat_keterangan'];
            $kat_id = $_POST['kat_id'];

            $sql = "UPDATE tb_kategori SET kat_nama=:kat_nama, kat_keterangan=:kat_keterangan WHERE kat_id=:kat_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":kat_nama", $kat_nama);
            $stmt->bindParam(":kat_keterangan", $kat_keterangan);
            $stmt->bindParam(":kat_id", $kat_id);
            $stmt->execute();
      }
}
