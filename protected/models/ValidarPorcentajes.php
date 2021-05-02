<?php
class ValidarPorcentajes extends CFormModel
{
    public $desayuno;
    public $breakmanana;
    public $almuerzo;
    public $breaktarde;
    public $merienda;

    public function rules()
    {
        return array(
          array(
              'desayuno, breakmanana, almuerzo, breaktarde, merienda',
              'required',
              'message' => 'Este campo es requerido',
          ),

            array(
                'desayuno',
                'match',
                'pattern' => '/^[0-9]+$/i',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'desayuno',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 2,
                'tooLong' => 'Maximo 2 digitos',
            ),

            array(
                'breakmanana',
                'match',
                'pattern' => '/^[0-9]+$/i',
            'message' => 'Error, solo numeros.',
        ),
            array(
                'breakmanana',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 2,
                'tooLong' => 'Maximo 2 digitos',
            ),

            array(
                'almuerzo',
                'match',
                'pattern' => '/^[0-9]+$/i',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'almuerzo',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 2,
                'tooLong' => 'Maximo 2 digitos',
            ),

            array(
                'breaktarde',
                'match',
                'pattern' => '/^[0-9]+$/i',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'breaktarde',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 2,
                'tooLong' => 'Maximo 2 digitos',
            ),

            array(
                'merienda',
                'match',
                'pattern' => '/^[0-9]+$/i',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'merienda',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 2,
                'tooLong' => 'Maximo 2 digitos',
            ),
        );
    }

    public function attributeLabels()
    {
        return array(
            //Porcentaje del Desayuno
            'desayuno' => 'Porcentaje del Desayuno:',
            //Porcentaje de break de la manana
            'breakmanana' => 'Porcentaje del Break de la Mañana:',
            //Porcentaje del Almuerzo
            'almuerzo' => 'Porcentaje del Almuerzo:',
            //Porcentaje del Break de la tarde
            'breaktarde' => 'Porcentaje del Break de la Tarde:',
            //Porcentaje de la Merienda
            'merienda' => 'Porcentaje de la Merienda:',
        );
    }
}