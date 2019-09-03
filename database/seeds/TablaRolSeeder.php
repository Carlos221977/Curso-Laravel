<?php
// se crea en terminal: php artisan make:seeder TablaRolSeeder

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //creamos los roles a rellenar en la tabla rol
        $rols=[
            'administrador',
            'editor',
            'supervisor'
        ];
        //con este foreach rellenamos los campos automáticamente
        foreach($rols as $key => $value){
            DB::table('rol')->insert([
                'nombre' => $value,
                'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
