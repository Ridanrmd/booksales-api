<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Leila S. Chudor',
            'bio' => 'Penulis dan jurnalis Indonesia, dikenal dengan karya-karyanya yang mendalam tentang sejarah dan budaya Indonesia.',
        ]);
        Author::create([
            'name' => 'Andrea Hirata',
            'bio' => 'Penulis Indonesia yang terkenal dengan novel Laskar Pelangi, yang mengangkat tema pendidikan dan persahabatan.',
        ]);
        Author::create([
            'name' => 'Donni Dirghantoro',
            'bio' => 'Penulis dan ilustrator Indonesia, dikenal dengan karya-karyanya yang menggabungkan cerita dan seni visual.',
        ]);
        Author::create([
            'name' => 'Ahmad Fuadi',
            'bio' => 'Penulis Indonesia yang terkenal dengan novel Negeri 5 Menara, yang mengisahkan perjuangan seorang santri di pesantren.',
        ]);
        Author::create([
            'name' => 'Habiburrahman El Shirazy',
            'bio' => 'Penulis Indonesia yang dikenal dengan novel Ayat-Ayat Cinta, yang mengangkat tema cinta dan spiritualitas dalam konteks Islam.',
        ]);

    }
}
