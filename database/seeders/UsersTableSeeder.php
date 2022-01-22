<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
    //     DB::table('users')->insert([            
    //         'name' => 'Admin Admin',
    //         'email' => 'admin@pousadascaparao.com',
    //         'email_verified_at' => now(),
    //         'password' => Hash::make('ademir@24'),
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //         'perfil'    => 'administrador'
    //     ]);

        // DB::table('info_principal')->insert([            
        //     'tituloPrincipal' => 'Titulo Principal',
        //     'titulo' => 'titulo',
        //     'subtitulo' => 'subtitulo',
        //     'titulointroducao' => 'titulointroducao',
        //     'introducao' => 'introducao',
        //     'sobreNos'    => 'sobreNos'
        // ]);

        DB::table('pousadas')->insert([            
            'nome' => 'Pousada1',
            'descricao' => 'Pousada1',
            'diaria' => '73.00',
            'imagem' => 'assets/siedbar/img/portfolio/1.jpg',
        ]);
        DB::table('pousadas')->insert([            
            'nome' => 'Pousada2',
            'descricao' => 'Pousada2',
            'diaria' => '57.14',
            'imagem' => 'assets/siedbar/img/portfolio/2.jpg',
        ]);
        DB::table('pousadas')->insert([            
            'nome' => 'Pousada3',
            'descricao' => 'Pousada3',
            'diaria' => '95.90',
            'imagem' => 'assets/siedbar/img/portfolio/3.jpg',
        ]);
    }
}
