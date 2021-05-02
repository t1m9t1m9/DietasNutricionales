<?php
class ConsultasDB
{
    public function guardar_usuario($ced_usu, $nom_usu, $ape_usu, $pass_usu)
    {
        $conexion = Yii::app()->db;
        $pass_usu = md5($pass_usu);
        $consulta = "INSERT INTO usuario(ced_usu, nom_usu, ape_usu, pass_usu)";
        $consulta .= " VALUES ";
        $consulta .= "('$ced_usu', '$nom_usu', '$ape_usu', '$pass_usu')";
        $resultado = $conexion->createCommand($consulta)->execute();
    }

    public function guardar_medidas($edad_med, $peso_med, $talla_med, $sex_med)
    {
        $conexion = Yii::app()->db;
        $ced_usu_med = Yii::app()->user->name;
        if($sex_med == 1)
        {
            $mtb_med = (10 * $peso_med) + (6.25 * $talla_med) - (5 * $edad_med) + 5; $sex_med = 'masculino';
        }
        else
        {
            $mtb_med = (10 * $peso_med) + (6.25 * $talla_med) - (5 * $edad_med) - 161; $sex_med = 'femenino';
        }
        $imc_med = $peso_med/(($talla_med/100)*($talla_med/100));
        $fecha_med = date("d/m/Y");
        $consulta = "INSERT INTO medidas(fecha_med, edad_med, peso_med, talla_med, imc_med, mtb_med, sex_med, ced_usu_med)";
        $consulta .= " VALUES ";
        $consulta .= "('$fecha_med', '$edad_med', '$peso_med', '$talla_med', '$imc_med', '$mtb_med', '$sex_med', '$ced_usu_med')";
        $resultado = $conexion->createCommand($consulta)->execute();
    }

    public function guardar_alimento($nombre, $energia, $proteinas, $carbohidratos, $grasas, $costo, $pdesayuno, $palmuerzo, $pmerienda, $pbreak)
    {
        $conexion = Yii::app()->db;

        $consulta = "INSERT INTO tbl_alimentos(nombre, energia, proteinas, carbohidratos, grasas, costo, pdesayuno, palmuerzo, pmerienda, pbreak)";
        $consulta .= " VALUES ";
        $consulta .= "('$nombre', '$energia', '$proteinas', '$carbohidratos', '$grasas', '$costo', '$pdesayuno', '$palmuerzo', '$pmerienda', '$pbreak')";
        $resultado = $conexion->createCommand($consulta)->execute();
    }

    public function actualizar_restricciones($maximoenergia, $minimoenergia, $fijoenergia, $maximoproteinas, $minimoproteinas, $fijoproteinas, $maximocarbohidratos, $minimocarbohidratos, $fijocarbohidratos, $maximograsas, $minimograsas, $fijograsas)
    {
        $conexion = Yii::app()->db;

        $consulta = "UPDATE restricciones SET maximoenergia='$maximoenergia', minimoenergia='$minimoenergia', fijoenergia='$fijoenergia',
                                              maximoproteinas='$maximoproteinas', minimoproteinas='$minimoproteinas', fijoproteinas='$fijoproteinas',
                                              maximocarbohidratos='$maximocarbohidratos', minimocarbohidratos='$minimocarbohidratos', fijocarbohidratos='$fijocarbohidratos',
                                              maximograsas='$maximograsas', minimograsas='$minimograsas', fijograsas='$fijograsas'";
        $resultado = $conexion->createCommand($consulta)->execute();

    }

    public function actualizar_pass($pass_usu)
    {
        $conexion = Yii::app()->db;
        $pass_md5 = md5($pass_usu);
        $consulta = "UPDATE usuario SET pass_usu='$pass_md5' WHERE ced_usu='$pass_usu'";
        $resultado = $conexion->createCommand($consulta)->execute();
    }

    public function actualizar_porcentajes($desayuno, $brakemanana, $almuerzo, $braketarde, $merienda)
    {
        $conexion = Yii::app()->db;
        $consulta = "UPDATE porcentajecomidas SET desayuno='$desayuno', brakemanana='$brakemanana', almuerzo='$almuerzo', braketarde='$braketarde', merienda='$merienda'";
        $resultado = $conexion->createCommand($consulta)->execute();
    }
}
