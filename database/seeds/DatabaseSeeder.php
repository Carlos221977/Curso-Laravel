<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   //llamamos a la funcion truncateTablas y ademas llamando a la tabla rol de la DB
        $this->truncateTablas([
            'rol',
            'permiso'
        ]);
        // ejecutamos la class del archivo TablaRolSeeder.php
        $this->call(TablaRolSeeder::class);
        $this->call(TablaPermisoSeeder::class);

    }

    protected function truncateTablas (array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
