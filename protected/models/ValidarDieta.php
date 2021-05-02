<?php

class ValidarDieta extends CFormModel
{
    public $peso;
    public $talla;
    public $edad;
    public $sexo;

    public function rules()
    {
        return array(
            array(
                'peso, talla, edad',
                'required',
                'message' => 'Este campo es requerido',
            ),

            array(
                'peso',
                'match',
                'pattern' => '/^[0-9]+$/i',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'peso',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 3,
                'tooLong' => 'Maximo 3 digitos',
            ),


            array(
                'talla',
                'match',
                'pattern' => '/^[0-9]+$/i',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'talla',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 3,
                'tooLong' => 'Maximo 3 digitos',
            ),

            array(
                'edad',
                'match',
                'pattern' => '/^[0-9]+$/i',
            'message' => 'Error, solo numeros.',
             ),
            array(
                'edad',
                'length',
                'min' => 1,
                'tooShort' => 'Minimo 1 digito',
                'max' => 2,
                'tooLong' => 'Maximo 2 digitos',
            ),

            //Validar radio Button
            array(
                'sexo',
                'required',
                'message' => 'Este campo es requerido',
            ),
            array(
                'sexo',
                'match',
                'pattern' => '/^[0-9]/',
                'message' => 'El tipo de dato no es valido',
            ),
        );
    }
}