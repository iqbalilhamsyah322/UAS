<?php

namespace Database\Seeders;
use App\Models\Registrations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Registrations::factory(30)->create();

        Registrations::create([
            'no_pendaftaran' => '01',
            'nisn' => '09281309183',
            'nama' => 'Hanif Abdurrahman',
            'alamat' =>'Handil Bakti',
            'tempat_lahir' =>'Yogyakarta',
            'tanggal_lahir' =>'11 November 2003',
            'asal_sekolah' =>'Muhammadiyah',
            'jenis_kelamin' =>'laki - laki',
            'jurusan' =>'Elektro',
            'nama_ayah' =>'yanto',
            'pekerjaan_ayah' =>'pegawai',
            'nama_ibu' =>'yanti',
            'pekerjaan_ibu' =>'pegawai',
            'penghasilan_orang_tua' =>'1000000',
        ]);
    }
}
