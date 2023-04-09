<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customer extends BaseController
{
  protected $customerModel;
  public function __construct()
  {
    $this->customerModel = new CustomerModel();
  }

  //Mengambil data dari Database
  public function index()
  {
    $curentPage = $this->request->getVar('page_customer') ? $this->request->getVar('page_customer') : 1;

    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $customer = $this->customerModel->search($keyword);
    } else {
      $customer = $this->customerModel;
    }


    $data = [
      "tittle" => "Customer",
      // 'customer' => $this->customerModel->findAll()
      'customer' => $customer->paginate(5, 'customer'),
      'pager' => $this->customerModel->pager,
      'curentPage' => $curentPage
    ];

    return view('/customer/index', $data);
  }


  public function create()
  {


    $data = [
      'tittle' => 'Form Tambah Data Barang',

    ];
    return view('/customer/create', $data);
  }





  public function save()
  {

    $slug = url_title($this->request->getVar('nama'), '-', true);
    $this->customerModel->save([
      'nama' => $this->request->getVar('nama'),
      'slug' => $slug,
      'alamat' => $this->request->getVar('alamat'),
      'nomor_telp' => $this->request->getVar('nomor_telp')
    ]);


    session()->setFlashdata('pesan', 'Data Berhasil ditambahkan');
    return redirect()->to('/customer');
  }



  //Detail
  public function detail($slug)
  {

    $data = [
      'tittle' => "Detail Customer",
      'customer' => $this->customerModel->getCustomer($slug)
    ];
    if (empty($data['customer'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Customer' . $slug . 'Tidak ditemukan');
    }
    return view('customer/detail', $data);
  }



  //Meghapus Data
  public function delete($id_cust)
  {
    $this->customerModel->delete($id_cust);
    session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
    return redirect()->to('/customer');
  }




  //Update Data
  public function edit($slug)
  {
    $data = [
      'tittle' => 'Form Ubah Data Customer',
      'validation' => \Config\Services::validation(),
      'customer' => $this->customerModel->getCustomer($slug)
    ];
    return view('/customer/edit', $data);
  }

  public function update($id)
  {


    $slug = url_title($this->request->getVar('nama'), '-', true);
    $this->customerModel->save([
      'id_cust' => $id,
      'nama' => $this->request->getVar('nama'),
      'slug' => $slug,
      'alamat' => $this->request->getVar('alamat'),
      'nomor_telp' => $this->request->getVar('nomor_telp')
    ]);


    session()->setFlashdata('pesan', 'Data Berhasil Diubah');
    return redirect()->to('/customer');
  }
}
