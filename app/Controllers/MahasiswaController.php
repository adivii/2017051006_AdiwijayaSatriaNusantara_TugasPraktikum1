<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $mahasiswa_model = new Mahasiswa();
        $mahasiswa = $mahasiswa_model->findall();

        $data = ['title' => "Mahasiswa", 'mahasiswa' => $mahasiswa];

        return view('templates/header', $data)
            . view('mahasiswa/list', $data)
            . view('templates/footer');
    }

    public function create()
    {
        // $mahasiswa_model = new Mahasiswa();
        // $mahasiswa = $mahasiswa_model->findall();

        $data = ['title' => "Mahasiswa"];

        return view('templates/header', $data)
            . view('mahasiswa/create')
            . view('templates/footer');
    }
}
