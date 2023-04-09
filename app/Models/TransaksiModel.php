<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
  protected $table = 'transaksi';
  protected $useTimestamps = true;
  protected $allowedFields = ['nama_pembeli', 'nama_barang', 'harga', 'total', 'no_pembeli'];



  public function getTransaksi($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}
