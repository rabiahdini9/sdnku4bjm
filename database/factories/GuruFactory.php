<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GuruFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'jabatan' => fake()->randomElement(['Guru Kelas', 'Guru Mapel']),
            'status' => 'Aktif',
            'foto' => null,
        ];
    }
}