<?php

namespace Database\Seeders;

use App\Models\Identitas;
use Illuminate\Database\Seeder;

class IdentitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Identitas::updateOrCreate(
            ['nama_sekolah' => 'SDN Kuin Utara 4 Banjarmasin'],
            [
                'npsn' => '30305056',
                'nss' => '101156004027',
                'kepala_sekolah' => 'Sri Wahyuni S.Pd.',
                'kontak' => '0851-2620-0356',
                'email' => 'sdnku4bjm@gmail.com',
                'alamat' => 'Jl. Hksn, Kuin Utara, Kec. Banjarmasin Utara Kota Banjarmasin Kalimantan Selatan Kode Pos: 70127',
                'status_sekolah' => 'Negeri',
                'akreditasi' => 'A (Unggul)',
                'tahun_berdiri' => '1981',
                'logo' => null,
            ]
        );
    }
}
