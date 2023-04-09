<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
  protected $table = 'barang';
  protected $useTimestamps = true;
  protected $allowedFields = ['nama', 'slug', 'jenis', 'harga_jual', 'harga_beli', 'stok', 'sampul'];


  public function getBarang($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}
