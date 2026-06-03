<?php

namespace Database\Seeders;

use App\Models\StrukturOrganisasi;
use Illuminate\Database\Seeder;

class StrukturOrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StrukturOrganisasi::updateOrCreate(
            ['deskripsi' => 'Struktur organisasi SDN Kuin Utara 4 Banjarmasin disusun untuk mendukung kelancaran kegiatan pendidikan dan administrasi sekolah. Setiap bagian memiliki tugas dan tanggung jawab dalam mengelola kegiatan sekolah secara efektif dan efisien demi terciptanya lingkungan belajar yang teratur dan kondusif.'],
            [
                'foto' => null,
            ]
        );
    }
}
