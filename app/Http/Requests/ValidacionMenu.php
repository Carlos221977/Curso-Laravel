<?php
// Creado con php artisan make:request ValidacionMenu
namespace App\Http\Requests;

use App\Rules\ValidarCampoUrl;
use Illuminate\Foundation\Http\FormRequest;

class ValidacionMenu extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //el unique le indicas que no puede repetir un mismo nombre en este caso y ademas el indicamos que es sobre la ruta de la id
            'nombre' => 'required|max:50|unique:menu,nombre,' . $this->route('id'),
            //'url' => 'required|max:100',
            //pasamos un array a ValidarCampoUrl.php
            'url' => ['required','max:100', new ValidarCampoUrl],
            'icono' => 'nullable|max:50'
        ];
    }
    public function messages()
    {
        return[
            'nombre.required' => 'El campo nombre es requerido',
            'url.required' => 'El campo url es requerido',
        ];
    }
}
