<?php


class ValidarIngresoDesayuno extends CFormModel
{
    public $nombre;
    public $energia;
    public $proteinas;
    public $carbohidratos;
    public $grasas;
    public $costo;
    public $pdesayuno;

    public function rules()
    {
        return array(
            array(
                'nombre, energia, proteinas, carbohidratos, grasas, costo, pdesayuno',
                'required',
                'message' => 'Este campo es requerido',
            ),

            array(
                'nombre',
                'match',
                'pattern' => '/^[a-z0-9áéíóúñ\s]+$/i',
                'message' => 'Error, solo letras.',
            ),
            array(
                'nombre',
                'length',
                'min' => 3,
                'tooShort' => 'Minimo 3 letras',
                'max' => 128,
                'tooLong' => 'Maximo 128 letras',
            ),

            array(
                'energia',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'energia',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),

            array(
                'proteinas',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'proteinas',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),

            array(
                'carbohidratos',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'carbohidratos',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),

            array(
                'grasas',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'grasas',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),

            array(
                'costo',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'costo',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),

            array(
                'pdesayuno',
                'match',
                'pattern' => '/^[0-9]+$/i',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'pdesayuno',
                'length',
                'min' => 1,
                'tooShort' => 'Solo 1 digito',
                'max' => 1,
                'tooLong' => 'Solo 1 digito',
            ),

        );
    }

    public function attributeLabels()
    {
        return array(
            'costo'=>'Valor del alimento',
            'pdesayuno'=>'Porsiones para el desayuno',
        );
    }

}