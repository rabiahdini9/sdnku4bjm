<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@sdn4kubjm.web.id'],
            [
                'name' => 'Admin',
                'password' => 'adminsdn4kubjm@',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ]
        )->forceFill(['role' => 'admin'])->save();

        $this->call([
            IdentitasSeeder::class,
            VisiMisiSeeder::class,
            StrukturOrganisasiSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
