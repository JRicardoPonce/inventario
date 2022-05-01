<?php

namespace Database\Seeders;
use App\Models\Cat_sucursal;
use Illuminate\Database\Seeder;

class sucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //seeder sucursal
        $sucursal = new cat_sucursal();
        $sucursal->sucursal="Cuernavaca";
        $sucursal->save();

        $sucursal1 = new cat_sucursal();
        $sucursal1->sucursal="Yautepec";
        $sucursal1->save();

        $sucursal2 = new cat_sucursal();
        $sucursal2->sucursal="Cuautla";
        $sucursal2->save();

        $sucursal3 = new cat_sucursal();
        $sucursal3->sucursal="Acapulco";
        $sucursal3->save();
    }
}
