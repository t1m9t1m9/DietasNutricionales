<?php
class ValidarRestricciones extends CFormModel
{

    public $maximoenergia;
    public $fijoenergia;
    public $minimoenergia;
    public $maximoproteinas;
    public $fijoproteinas;
    public $minimoproteinas;
    public $maximocarbohidratos;
    public $fijocarbohidratos;
    public $minimocarbohidratos;
    public $maximograsas;
    public $fijograsas;
    public $minimograsas;

    public function rules()
    {
        return array(
            array(
                'maximoenergia, fijoenergia, minimoenergia, 
                 maximoproteinas, fijoproteinas, minimoproteinas, 
                 maximocarbohidratos, fijocarbohidratos, minimocarbohidratos, 
                 maximograsas, fijograsas, minimograsas',
                'required',
                'message' => 'Este campo es requerido',
            ),
//energia
            array(
                'maximoenergia',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'maximoenergia',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),
            array(
                'fijoenergia',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'fijoenergia',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),
            array(
                'minimoenergia',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'minimoenergia',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),
//proteinas
            array(
                'maximoproteinas',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'maximoproteinas',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),
            array(
                'fijoproteinas',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'fijoproteinas',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),
            array(
                'minimoproteinas',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'minimoproteinas',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),
//carbohidratos
            array(
                'maximocarbohidratos',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'maximocarbohidratos',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),
            array(
                'fijocarbohidratos',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'fijocarbohidratos',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),
            array(
                'minimocarbohidratos',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'minimocarbohidratos',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),
//grasas
            array(
                'maximograsas',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'maximograsas',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),
            array(
                'fijograsas',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'fijograsas',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),
            array(
                'minimograsas',
                'match',
                'pattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'minimograsas',
                'length',
                'min' => 2,
                'tooShort' => 'Minimo 2 digitos',
                'max' => 5,
                'tooLong' => 'Maximo 5 digitos',
            ),
           // array('cedula', 'comprobar_cedula')

        );
    }

    public function attributeLabels()
    {
        return array(
            //energia
            'maximoenergia'=>'Valor maximo de Energia:',
            'fijoenergia'=>'Valor fijo de Energia:',
            'minimoenergia'=>'Valor minimo de Energia:',
            //proteinas
            'maximoproteinas'=>'Valor maximo de Proteinas:',
            'fijoproteinas'=>'Valor fijo de Proteinas:',
            'minimoproteinas'=>'Valor minimo de Proteinas:',
            //carbohidratos
            'maximocarbohidratos'=>'Valor maximo de Carbohidratos:',
            'fijocarbohidratos'=>'Valor fijo de Carbohidratos:',
            'minimocarbohidratos'=>'Valor minimo de Carbohidratos:',
            //grasas
            'maximograsas'=>'Valor maximo de Grasas:',
            'fijograsas'=>'Valor fijo de Grasas:',
            'minimograsas'=>'Valor minimo de Grasas:',
        );
    }

//    public function comprobar_cedula($attributes, $params)
//    {
//        $conexion = Yii::app()->db;
//
//        $consulta = "SELECT ced_usu FROM usuario WHERE ";
//        $consulta .= "ced_usu='".$this->cedula."'";
//
//        $resultado = $conexion->createCommand($consulta);
//        $filas = $resultado->query();
//
//        foreach($filas as $fila)
//        {
//            if($this->cedula === $fila['ced_usu'])
//            {
//                $this->addError('cedula', 'Cedula no disponible');
//                break;
//            }
//        }
//
//    }
}