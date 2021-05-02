<?php

class CambiarPassword extends CFormModel
{
    public $password;
    public $nuevo_password;
    public $repetir_nuevo_password;

    public function rules()
    {
        return array(
            array(
              'password, nuevo_password, repetir_nuevo_password',
              'required',
              'message' => 'El campo es requerido',
            ),

            array(
                'password',
                'match',
                'pattern' => '/^[a-z0-9áéíóúñ\_]+$/i',
                'message' => 'Error, solo letras, numeros y guiones bajos',
            ),
            array(
                'password',
                'length',
                'min' => 8,
                'tooShort' => 'Su contraseña debe tener minimo 8 caracteres',
                'max' => 60,
                'tooLong' => 'Su contraseña debe tener maximo 60 caracteres',
            ),

            array(
                'nuevo_password',
                'match',
                'pattern' => '/^[a-z0-9áéíóúñ\_]+$/i',
                'message' => 'Error, solo letras, numeros y guiones bajos',
            ),
            array(
                'nuevo_password',
                'length',
                'min' => 8,
                'tooShort' => 'Su contraseña debe tener minimo 8 caracteres',
                'max' => 60,
                'tooLong' => 'Su contraseña debe tener maximo 60 caracteres',
            ),

            array(
                'repetir_nuevo_password',
                'compare',
                'compareAttribute' => 'nuevo_password',
                'message' => 'El password no coincide'
            ),
        );
    }
}