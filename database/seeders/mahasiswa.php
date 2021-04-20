<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maba = [
            [
                'nim' => '1941720004',
                'nama' => 'Mochammad Fajar Darussalam',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '089697134531',
                'e_mail' => 'fajardarussalam24@gmail.com',
                'tgllahir' => 20010401,
                'kelas' => 'TI-2I',
                
            ],
            [
                'nim' => '1731710144',
                'nama' => 'SALMA NUR RAHMA',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '089676872653',
                'e_mail' => 'salma@gmail.com',
                'tgllahir' => 19990904,
                'kelas' => 'TI-2I',
                
            ],
            [
                'nim' => '2031710025',
                'nama' => 'MELISA',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '089987610298',
                'e_mail' => 'melisa@gmail.com',
                'tgllahir' => 20020105,
                'kelas' => 'TI-2I',
                
            ],
            [
                'nim' => '2031710053',
                'nama' => 'ELIZABETH RESI ANDARI',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '089527547723',
                'e_mail' => 'elisa@gmail.com',
                'tgllahir' => 20020218,
                'kelas' => 'TI-2I',
                
            ],
            [
                'nim' => '2031710102',
                'nama' => 'HAFIDZ IRWAN MAULANA	',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '089527547723',
                'e_mail' => 'hafiszl@gmail.com',
                'tgllahir' => 20020101,
                'kelas' => 'TI-2I',
                
            ],
            [
                'nim' => '2041720003',
                'nama' => 'Randhika',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '089374628364',
                'e_mail' => 'pepsi@gmail.com',
                'tgllahir' => 20030102,
                'kelas' => 'TI-2I',
                
            ],
            [
                'nim' => '1941720044',
                'nama' => 'Rajaf',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '089765241826',
                'e_mail' => 'jafra@gmail.com',
                'tgllahir' => 20020102,
                'kelas' => 'TI-2I',
                
            ],
        ];

        DB::table('mahasiswa')->insert($maba);
    }
}
