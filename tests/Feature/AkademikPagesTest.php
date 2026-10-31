<?php

namespace Tests\Feature;

use Tests\TestCase;

class AkademikPagesTest extends TestCase
{
    public function test_biodata_page_displays_student_information(): void
    {
        $response = $this->get(route('biodata'));

        $response->assertOk()
            ->assertViewIs('biodata')
            ->assertSee('<title>Akademik</title>', false)
            ->assertSee('Mahasiswa Akademik')
            ->assertSee('20260001')
            ->assertSee('01 Januari 2003')
            ->assertSee('Situbondo, Jawa Timur');
    }

    public function test_program_study_page_displays_all_programs(): void
    {
        $response = $this->get(route('prodi'));

        $response->assertOk()
            ->assertViewIs('prodi')
            ->assertSee('Teknik Informatika')
            ->assertSee('Sistem Informasi')
            ->assertSee('Manajemen Informatika');
    }

    public function test_faculty_page_displays_all_faculties(): void
    {
        $response = $this->get(route('fakultas'));

        $response->assertOk()
            ->assertViewIs('fakultas')
            ->assertSee('Fakultas Teknik')
            ->assertSee('Fakultas Ilmu Komputer')
            ->assertSee('Fakultas Ekonomi')
            ->assertSee('Dr. Siti Rahmawati');
    }
}
