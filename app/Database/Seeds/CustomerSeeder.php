<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class CustomerSeeder extends Seeder
{
  public function run()
  {
    $data = [
      [
        'nama'          => 'Gani ',
        'alamat'        => 'Jl Dadap No.45 Indramayu',
        'nomor_telp'    => '083878728182',
        'created_at'    => Time::now(),
        'updated_at'    => Time::now()
      ],
      [
        'nama'          => 'Herlinda Nayla',
        'alamat'        => 'Jl Dadap No.1 Indramayu',
        'nomor_telp'    => '089889271882',
        'created_at'    => Time::now(),
        'updated_at'    => Time::now()
      ],
      [
        'nama'          => ' Fajar',
        'alamat'        => 'Jl Pahlawan, Bogor',
        'nomor_telp'    => '089772816271',
        'created_at'    => Time::now(),
        'updated_at'    => Time::now()
      ],
      [
        'nama'          => 'Ihsan ',
        'alamat'        => 'Jl Cikutra, Bandung',
        'nomor_telp'    => '083878728182',
        'created_at'    => Time::now(),
        'updated_at'    => Time::now()
      ],
      [
        'nama'          => 'Hardy',
        'alamat'        => 'Jl Soekarno Hatta, Bandung',
        'nomor_telp'    => '083878728182',
        'created_at'    => Time::now(),
        'updated_at'    => Time::now()
      ],
      [
        'nama'          => 'Nindi',
        'alamat'        => 'Balongan, Indramayu',
        'nomor_telp'    => '7738271822',
        'created_at'    => Time::now(),
        'updated_at'    => Time::now()
      ],
      [
        'nama'          => 'Zulfa',
        'alamat'        => 'Jl Cikutra, Bandung',
        'nomor_telp'    => '082887362712',
        'created_at'    => Time::now(),
        'updated_at'    => Time::now()
      ]

    ];

    // Simple Queries
    // $this->db->query('INSERT INTO customer (nama, alamat, nomor_telp, created_at, updated_at) VALUES(:nama:, :alamat:, :nomor_telp:, :created_at:, :updated_at:)', $data);

    // Using Query Builder
    //Insert 1 Data
    // $this->db->table('customer')->insert($data);

    //Insert banyak data

    $this->db->table('customer')->insertBatch($data);
  }
}
