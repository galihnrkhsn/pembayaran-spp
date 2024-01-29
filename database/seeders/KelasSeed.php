<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = [
            [
                'nama_kelas' => 'Akuntansi'
            ],
            [
                'nama_kelas' => 'Perhotelan'
            ],
            [
                'nama_kelas' => 'Rekayasa Perangkat Lunak'
            ],
            [
                'nama_kelas' => 'Teknik Komputer Jaringan'
            ],
            [
                'nama_kelas' => 'Farmasi'
            ],
            [
                'nama_kelas' => 'Teknik Bisnis Sepeda Motor'
            ],
            [
                'nama_kelas' => 'Perkantoran'
            ],
        ];
        foreach ($kelas as $key => $k) {
            Kelas::create([
                'nama_kelas' => $k['nama_kelas']
            ]);
        }
    }
}
