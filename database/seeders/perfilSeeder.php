<?php

namespace Database\Seeders;
use App\Models\Cat_perfil;
use Illuminate\Database\Seeder;

class perfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cat_perfil = new cat_perfil();
        $cat_perfil->perfil="Administrador";
        $cat_perfil->save();

        $cat_perfil1 = new cat_perfil();
        $cat_perfil1->perfil="Capturista";
        $cat_perfil1->save();

    }
}
