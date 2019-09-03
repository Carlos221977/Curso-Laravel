<?php

use Illuminate\Database\Seeder;
use App\Models\Permiso;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creamos 50 registros en la base de datos llamada Permiso a partir de la clase llamada Permiso.
        //LLamada desde PermisoFactory.php en factories
        factory(Permiso::class, 50)->create();
    }
}
