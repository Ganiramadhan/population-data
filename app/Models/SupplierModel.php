<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
  protected $table = 'supplier';
  protected $primaryKey = 'id_supplier';
  protected $useTimestamps = true;
  protected $allowedFields = ['nama', 'slug', 'alamat', 'nomor_telp'];


  public function getSupplier($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}
