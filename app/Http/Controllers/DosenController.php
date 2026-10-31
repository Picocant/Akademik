<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = [
            [
                'nidn' => '0012018501',
                'nama' => 'Dr. Budi Santoso, S.Kom., M.Kom.',
                'prodi' => 'Teknik Informatika',
            ],
            [
                'nidn' => '0023058802',
                'nama' => 'Siti Rahmawati, S.Kom., M.Kom.',
                'prodi' => 'Sistem Informasi',
            ],
            [
                'nidn' => '0015099003',
                'nama' => 'Andi Wijaya, S.T., M.T.',
                'prodi' => 'Manajemen Informatika',
            ],
        ];

        return view('dosen.index', compact('dosens'));
    }
}
