<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class registerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if ($this->routeIs('storeUser'))
        {
            return [
                'txtNombreAdd'=>'required|max:200',
                'txtEmailAdd'=>'required|email:rfc,dns',
                'txtCiudadAdd'=>'required|max:200',
                'txtRolAdd'=>'required',
                'txtPasswordAdd'=>['required', 'confirmed:txtPasswordConfirmationAdd', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
                'txtPasswordConfirmationAdd'=>['required', Password::min(8)->letters()->mixedCase()->numbers()->symbols()]
            ];
        }
        elseif ($this->routeIs('updateUser'))
        {
            return [
                'txtNombreEdit'=>'required|max:200',
                'txtEmailEdit'=>'required|email:rfc,dns',
                'txtCiudadEdit'=>'required|max:200',
                'txtRolEdit'=>'required',
                'txtEstadoEdit'=>'required'
            ];
        }
        else
        {
            return [
                'txtNombre'=>'required|max:200',
                'txtEmail'=>'required|email:rfc,dns',
                'txtCiudad'=>'required|max:200',
                'txtPassword'=>['required', 'confirmed:txtPasswordConfirmation', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
                'txtPasswordConfirmation'=>['required', Password::min(8)->letters()->mixedCase()->numbers()->symbols()]
            ];
        }
    }
}
