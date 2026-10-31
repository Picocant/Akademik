<?php

namespace App\Http\Controllers;

class AkademikController extends Controller
{
    public function biodata()
    {
        $biodata = [
            'nama' => 'Mahasiswa Akademik',
            'nim' => '20260001',
            'tempat_lahir' => 'Situbondo',
            'tanggal_lahir' => '01 Januari 2003',
            'jenis_kelamin' => 'Laki-laki',
            'program_studi' => 'Teknik Informatika',
            'fakultas' => 'Fakultas Teknik',
            'alamat' => 'Situbondo, Jawa Timur',
        ];

        return view('biodata', compact('biodata'));
    }

    public function prodi()
    {
        $prodi = [
            [
                'kode' => 'TI',
                'nama' => 'Teknik Informatika',
                'jenjang' => 'S1',
                'fakultas' => 'Fakultas Teknik',
            ],
            [
                'kode' => 'SI',
                'nama' => 'Sistem Informasi',
                'jenjang' => 'S1',
                'fakultas' => 'Fakultas Ilmu Komputer',
            ],
            [
                'kode' => 'MI',
                'nama' => 'Manajemen Informatika',
                'jenjang' => 'D3',
                'fakultas' => 'Fakultas Ilmu Komputer',
            ],
        ];

        return view('prodi', compact('prodi'));
    }

    public function fakultas()
    {
        $fakultas = [
            [
                'kode' => 'FT',
                'nama' => 'Fakultas Teknik',
                'dekan' => 'Dr. Budi Santoso',
            ],
            [
                'kode' => 'FIK',
                'nama' => 'Fakultas Ilmu Komputer',
                'dekan' => 'Dr. Andi Wijaya',
            ],
            [
                'kode' => 'FE',
                'nama' => 'Fakultas Ekonomi',
                'dekan' => 'Dr. Siti Rahmawati',
            ],
        ];

        return view('fakultas', compact('fakultas'));
    }
}
