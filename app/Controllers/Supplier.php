<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\SupplierModel;

class Supplier extends BaseController
{
  protected $supplierModel;
  public function __construct()
  {
    $this->supplierModel = new SupplierModel();
  }

  //Mengambil data dari Database
  public function index()
  {
    $supplier = $this->supplierModel->findAll();
    $data = [
      "tittle" => "Supplier",
      'supplier' => $this->supplierModel->getSupplier()
    ];

    return view('/supplier/index', $data);
  }


  //Detail
  public function detail($slug)
  {

    $data = [
      'tittle' => "Detail Supplier",
      'supplier' => $this->supplierModel->getSupplier($slug)
    ];
    if (empty($data['supplier'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Supplier ' . $slug . 'Tidak ditemukan');
    }
    return view('supplier/detail', $data);
  }




  //Membuat data baru

  public function create()
  {


    $data = [
      'tittle' => 'Form Tambah Data Supplier',

    ];
    return view('/supplier/create', $data);
  }

  //Menyimpan Inputan ke Database

  public function save()
  {

    $slug = url_title($this->request->getVar('nama'), '-', true);
    $this->supplierModel->save([
      'nama' => $this->request->getVar('nama'),
      'slug' => $slug,
      'alamat' => $this->request->getVar('alamat'),
      'nomor_telp' => $this->request->getVar('nomor_telp'),

    ]);


    session()->setFlashdata('pesan', 'Data Berhasil ditambahkan');
    return redirect()->to('/supplier');
  }


  //Meghapus Data
  public function delete($id)
  {
    $this->supplierModel->delete($id);
    session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
    return redirect()->to('/supplier');
  }


  //Update Data
  public function edit($slug)
  {
    $data = [
      'tittle' => 'Form Ubah Data Supplier',
      'validation' => \Config\Services::validation(),
      'supplier' => $this->supplierModel->getSupplier($slug)
    ];
    return view('/supplier/edit', $data);
  }

  public function update($id_supplier)
  {


    $slug = url_title($this->request->getVar('nama'), '-', true);
    $this->supplierModel->save([
      'id_supplier' => $id_supplier,
      'slug' => $slug,
      'nama' => $this->request->getVar('nama'),
      'alamat' => $this->request->getVar('alamat'),
      'nomor_telp' => $this->request->getVar('nomor_telp')
    ]);


    session()->setFlashdata('pesan', 'Data Berhasil Diubah');
    return redirect()->to('/supplier');
  }
}
