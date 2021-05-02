<?php

class ValidarRegistro extends CFormModel
{
    public $cedula;
    public $nombre;
    public $apellido;
    public $password;
    public $repetir_password;

    public function rules()
    {
        return array(
                        array(
                                'cedula, nombre, apellido, password, repetir_password',
                                'required',
                                'message' => 'Este campo es requerido',
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
                            'nombre',
                            'match',
                            'pattern' => '/^[a-zA-Záéíóúñ\s]+$/i',
                            'message' => 'Error, solo letras.',
                             ),
                             array(
                                 'nombre',
                                 'length',
                                 'min' => 3,
                                 'tooShort' => 'Debe tener minimo 3 letras',
                                 'max' => 50,
                                 'tooLong' => 'El maximo de letras es 50',
                             ),

                             array(
                                 'apellido',
                                 'match',
                                 'pattern' => '/^[a-zA-Záéíóúñ\s]+$/i',
                                 'message' => 'Error, solo letras.',
                             ),
                             array(
                                'apellido',
                                'length',
                                'min' => 3,
                                'tooShort' => 'Debe tener minimo 3 letras',
                                'max' => 50,
                                'tooLong' => 'El maximo de letras es 50',
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
                                'repetir_password',
                                'compare',
                                'compareAttribute' => 'password',
                                'message' => 'El password no coincide',
                             ),

                             array('cedula', 'comprobar_cedula')

                    );
    }

public function comprobar_cedula($attributes, $params)
{
    $conexion = Yii::app()->db;

    $consulta = "SELECT ced_usu FROM usuario WHERE ";
    $consulta .= "ced_usu='".$this->cedula."'";

    $resultado = $conexion->createCommand($consulta);
    $filas = $resultado->query();

    foreach($filas as $fila)
    {
        if($this->cedula === $fila['ced_usu'])
        {
            $this->addError('cedula', 'Cedula no disponible');
            break;
        }
    }

}

}