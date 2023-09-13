<?php

namespace App\Controllers;

use App\Models\m_absenWeb;

class Absen extends BaseController
{

    protected $modelAbsen;

    public function __construct()
    {
        $this->modelAbsen = new m_absenWeb();
    }

    public function index(): string
    {
        // $absen = $this->modelAbsen->findAll();

        $data = [
            'title' => 'Absen Ekskul | Desain Web',
            'absen' => $this->modelAbsen->getId()
        ];

        return view('/absen_web/index', $data);
    }

    public function update($id)
    {
        $data = [
            'title' => 'Edit Nama Siswa',
            'absen' => $this->modelAbsen->getId($id)
        ];

        return view('/absen_web/update', $data);
    }

    public function insert()
    {
        $data = [
            'title' => 'Tambah Siswa'
        ];

        return view('/absen_web/insert', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama' => 'required|is_Unique[absen.nama]'
        ]))
            $username = $this->request->getVar('nama');
        $kelas = $this->request->getVar('kelas');

        $this->modelAbsen->save([
            'nama' => $username,
            'kelas' => $kelas
        ]);
        session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
        return redirect()->to('/absen_web');
    }
}
