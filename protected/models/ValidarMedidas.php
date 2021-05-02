<?php

class ValidarMedidas extends CFormModel
{
    public $fechamed;
    public $edad;
    public $peso;
    public $talla;
    public $sexo;

    public function rules()
    {
        return array(
            array(
                'edad, peso, talla, sexo',
                'required',
                'message' => 'Este campo es requerido',
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
                'min' => 2,
                'tooShort' => 'Edad Incorrecta',
                'max' => 2,
                'tooLong' => 'Edad Incorrecta',
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
                'tooShort' => 'Peso Incorrecto',
                'max' => 3,
                'tooLong' => 'Peso Incorrecto',
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
                'tooShort' => 'Tamaño Incorrecto',
                'max' => 3,
                'tooLong' => 'Tamaño Incorrecto',
            ),

            array(
                'sexo',
                'match',
                'pattern' => '/^[0-9]/',
                'message' => 'El tipo de datos que quieres no es valido.',
            ),
       // array('fechamed','comprobar_f')
        );
    }

    public function comprobar_f($attributes, $params)
    {
        $conexion = Yii::app()->db;

        $consulta = "SELECT fecha_med FROM medidas WHERE ";
        $consulta .= "fecha_med='" . $this->fechamed . "'";

        $resultado = $conexion->createCommand($consulta);
        $filas = $resultado->query();

        foreach ($filas as $fila) {
            if ($this->fechamed === $fila['fecha_med']) {
                $this->addError('fechamed', 'Fecha no disponible');
                break;
            }
        }

    }
}