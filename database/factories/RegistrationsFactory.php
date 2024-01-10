<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RegistrationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_pendaftaran' => $this->faker->unique()->randomNumber(5),
            'nisn' => $this->faker->unique()->randomNumber(9),
            'nama' => $this->faker->name,
            'alamat' => $this->faker->address,
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date,
            'asal_sekolah' => $this->faker->company,
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'jurusan' => $this->faker->randomElement(['RPL']),
            'nama_ayah' => $this->faker->name,
            'pekerjaan_ayah' => $this->faker->jobTitle,
            'nama_ibu' => $this->faker->name,
            'pekerjaan_ibu' => $this->faker->jobTitle,
            'penghasilan_orang_tua' => $this->faker->randomFloat(2, 1000000, 5000000),
// 'foto' =>
        ];
    }
}

