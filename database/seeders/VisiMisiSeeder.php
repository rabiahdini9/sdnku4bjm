<?php

namespace Database\Seeders;

use App\Models\VisiMisi;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VisiMisi::updateOrCreate(
            ['visi' => 'Berprestasi, Berakhlak Mulia dan Berwawasan Lingkungan'],
            [
                'misi' => "1. Meningkatkan sumber daya pendidik dan kependidikan profesional.\n"
                    . "2. Meningkatkan profesionalisme pendidik/guru dalam mengembangkan pelajaran yang aktif, inovatif, kreatif, dan efektif dengan pendekatan saintifik, PPK, dan literasi.\n"
                    . "3. Melaksanakan pendidikan berbudi pekerti melalui contoh, keteladanan, dan pembiasaan sehari-hari.\n"
                    . "4. Menumbuhkembangkan potensi peserta didik agar menjadi manusia yang beriman, bertakwa, berkarakter, berakhlak mulia.\n"
                    . "5. Meningkatkan prestasi peserta didik dalam bidang akademik dan non-akademik.\n"
                    . "6. Meningkatkan mutu lulusan yang berdaya saing tinggi dan mandiri.\n"
                    . "7. Meningkatkan suasana kekeluargaan antar warga sekolah.\n"
                    . "8. Meningkatkan budaya lingkungan yang bersih, sehat, sejuk, rindang, asri, dan aman.",
                'foto' => null,
            ]
        );
    }
}
