<?php

namespace App\Controllers;

use App\Models\TransaksiModel;

class Transaksi extends BaseController
{
  protected $transaksiModel;
  public function __construct()
  {
    $this->transaksiModel = new TransaksiModel();
  }

  //Mengambil data dari Database
  public function index()
  {
    $transaksi = $this->transaksiModel->findAll();
    $data = [
      "tittle" => "Transaksi",
      'transaksi' => $this->transaksiModel->getTransaksi()
    ];

    return view('/transaksi/index', $data);
  }
}
