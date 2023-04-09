<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
  protected $barangModel;
  public function __construct()
  {
    $this->barangModel = new BarangModel();
  }

  //Mengambil data dari Database
  public function index()
  {
    $barang = $this->barangModel->findAll();
    $data = [
      "tittle" => "Product",
      'barang' => $this->barangModel->getBarang()
    ];

    return view('/barang/index', $data);
  }


  //Detail
  public function detail($slug)
  {

    $data = [
      'tittle' => "Detail Barang",
      'barang' => $this->barangModel->getBarang($slug)
    ];
    if (empty($data['barang'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Barang' . $slug . 'Tidak ditemukan');
    }
    return view('barang/detail', $data);
  }


  //Membuat data baru

  public function create()
  {


    $data = [
      'tittle' => 'Form Tambah Data Barang',

    ];
    return view('/barang/create', $data);
  }

  //Menyimpan Inputan ke Database

  public function save()
  {

    //Mengambil Gambar 
    $fileSampul = $this->request->getFile('sampul');

    //Apakah tidak ada gambar yang diupload
    if ($fileSampul->getError() == 4) {
      $namaSampul = 'default.png';
    } else {

      //Generate nama sampul Random
      $namaSampul = $fileSampul->getRandomName();

      //Pindahkan file ko folder img
      $fileSampul->move('img', $namaSampul);
    }




    $slug = url_title($this->request->getVar('nama'), '-', true);
    $this->barangModel->save([
      'nama' => $this->request->getVar('nama'),
      'slug' => $slug,
      'jenis' => $this->request->getVar('jenis'),
      'harga_jual' => $this->request->getVar('harga_jual'),
      'harga_beli' => $this->request->getVar('harga_beli'),
      'stok' => $this->request->getVar('stok'),
      'sampul' => $namaSampul
    ]);


    session()->setFlashdata('pesan', 'Data Berhasil ditambahkan');
    return redirect()->to('/barang');
  }

  //Meghapus Data
  public function delete($id)
  {


    //Cari Gambar berdasarkan Id
    $barang = $this->barangModel->find($id);

    //Cek Jika file Gambarnya default
    if ($barang['sampul'] != 'default.png') {

      //Hapus Gambar 
      unlink('img/' . $barang['sampul']);
    }



    $this->barangModel->delete($id);
    session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
    return redirect()->to('/barang');
  }


  //Update Data
  public function edit($slug)
  {
    $data = [
      'tittle' => 'Form Ubah Data Barang',
      'validation' => \Config\Services::validation(),
      'barang' => $this->barangModel->getBarang($slug)
    ];
    return view('/barang/edit', $data);
  }

  public function update($id)
  {

    $fileSampul = $this->request->getFile('sampul');



    // Cek Gambar apakah sudah diganti apa tidak

    if ($fileSampul->getError() == 4) {
      $namaSampul = $this->request->getVar('sampulLama');
    } else {
      // generate nama file random 
      $namaSampul = $fileSampul->getRandomName();

      // pindahkan gambar 
      $fileSampul->move('img', $namaSampul);

      // Hapus file yang lama 
      unlink('img/' . $this->request->getVar('sampulLama'));
    }


    $slug = url_title($this->request->getVar('nama'), '-', true);
    $this->barangModel->save([
      'id' => $id,
      'nama' => $this->request->getVar('nama'),
      'slug' => $slug,
      'jenis' => $this->request->getVar('jenis'),
      'harga_beli' => $this->request->getVar('harga_beli'),
      'harga_jual' => $this->request->getVar('harga_jual'),
      'stok' => $this->request->getVar('stok'),
      'sampul' => $namaSampul
    ]);


    session()->setFlashdata('pesan', 'Data Berhasil Diubah');
    return redirect()->to('/barang');
  }
}
