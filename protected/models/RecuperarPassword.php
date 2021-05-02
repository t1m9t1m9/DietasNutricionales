<?php

class RecuperarPassword extends CFormModel
{

    public $cedula;
    //public $email;
    public $captcha;

    public function rules()
    {
        return array(
            array(
                'cedula, captcha',
                'required',
                'message' => 'El campo es requerido',
            ),
            array(
                'cedula',
                'match',
                'pattern' => '/^[0-9]+$/i',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'cedula',
                'length',
                'min' => 10,
                'tooShort' => 'La cedula tiene 10 digitos',
                'max' => 10,
                'tooLong' => 'La cedula tiene 10 digitos',
            ),

             array(
                 'captcha',
                 'captcha',
                 'message' => 'Error el codigo no es valido',
             ),
        );
    }

    public function attributeLabels()
    {
        return array(
            'cedula' => 'Cedula',
        );
    }

}

