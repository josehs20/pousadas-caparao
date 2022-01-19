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
        DB::table('users')->insert([
            
            'name' => 'Admin Admin',
            'email' => 'admin@pousadascaparao.com',
            'email_verified_at' => now(),
            'password' => Hash::make('ademir@24'),
            'created_at' => now(),
            'updated_at' => now(),
            'perfil'    => 'administrador'
        ]);

        DB::table('info_principal')->insert([
            
            'tituloPrincipal' => 'Titulo Principal',
            'titulo' => 'titulo',
            'subtitulo' => 'subtitulo',
            'titulointroducao' => 'titulointroducao',
            'introducao' => 'introducao',
            'sobreNos'    => 'sobreNos'
        ]);
    }
}
