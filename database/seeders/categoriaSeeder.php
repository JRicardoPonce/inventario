<?php

namespace Database\Seeders;
use App\Models\Cat_categoria;
use Illuminate\Database\Seeder;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cat_categoria = new cat_categoria();
        $cat_categoria->categoria="Electronica";
        $cat_categoria->save();

        $cat_categoria1 = new cat_categoria();
        $cat_categoria1->categoria="Linea Blanca";
        $cat_categoria1->save();

        $cat_categoria2 = new cat_categoria();
        $cat_categoria2->categoria="Deportes";
        $cat_categoria2->save();

        $cat_categoria3 = new cat_categoria();
        $cat_categoria3->categoria="Alimentos";
        $cat_categoria3->save();

        $cat_categoria4 = new cat_categoria();
        $cat_categoria4->categoria="Jardin";
        $cat_categoria4->save();
    }
}
