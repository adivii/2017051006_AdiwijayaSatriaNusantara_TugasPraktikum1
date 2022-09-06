<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $datamahasiswa = [
            [
                'npm' => '2017051006',
                'nama' => 'Adiwijaya Satria Nusantara',
                'alamat' => 'Gisting',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '2017051001',
                'nama' => 'Ervan Chodry',
                'alamat' => 'Rejomulyo',
                'created_at' => Time::now()
            ]

        ];

        // Simple Queries (One Data)
        // $this->db->query('INSERT INTO mahasiswa (npm, nama, alamat, created_at) VALUES(:npm:, :nama:, :alamat:, :created_at:)', $data);

        // Using Query Builder
        foreach($datamahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
