<?php

namespace App\Rules;

use App\Models\Admin\Menu;
use Illuminate\Contracts\Validation\Rule;

class ValidarCampoUrl implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    //Creamos una regla para que no se pueda duplicar la url en el campo url del form.blade.php, 
    //pero si es numérico si que dejara
    {
        if($value != '#'){
           $menu = Menu::where($attribute , $value)->get();
            return $menu->isEmpty();
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Esta url ya esta asignada.';
    }
}
