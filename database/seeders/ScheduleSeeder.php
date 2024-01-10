<?php

namespace Database\Seeders;
use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::factory(35)->create();

        Schedule::create([
            'subject_id' => 5,
            'hari' => 'rabu',
            'jam_mulai' => fake()->dateTime(),
            'jam_selesai' => fake()->dateTime(),
            'ruangan' => 'ruangan102',
            'kode_absensi' => fake()->randomNumber(),
            'tahun_akademik' => '2022/2023',
            'semester' => 'genap',
        ]);
    }
}
