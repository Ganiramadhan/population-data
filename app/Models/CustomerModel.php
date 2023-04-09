<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
  protected $table = 'customer';
  protected $useTimestamps = true;
  protected $primaryKey = 'id_cust';
  protected $allowedFields = ['nama', 'slug', 'alamat', 'nomor_telp'];

  public function search($keyword)
  {
    // $builder = $this->table('customer');
    // $builder->like('nama', $keyword);
    // return $builder;

    return $this->table('customer')->like('nama', $keyword)->orLike('alamat', $keyword);
  }



  public function getCustomer($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }
}
