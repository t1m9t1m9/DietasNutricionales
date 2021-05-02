<?php
$this->pageTitle = 'Calculo de Dieta';
$this->breadcrumbs = array('Calculo de Dieta');
$idAli = Medidas::model()->findAll();//recupera de la bdd todos los id
$cedula = Yii::app()->user->name;

?>

<h1 style="text-align:center; color:dodgerblue">Diagnóstico del Índice de Masa Corporal(IMC)</h1>
<br>
            <?php
            foreach ($idAli as $valores)
            {
                if($cedula == $valores->ced_usu_med)
                {
                    $imc = number_format($valores->imc_med,2,'.',',');
                    $tmb = $valores->mtb_med;
                }
            }
            ?>
<!--IMC-->
<?php
if($imc < 18.5)
{
    ?>

    <!--        BAJO PESO-->
    <h5 align="center">
        <?php echo "Su Índice de Masa Corporal es de: ";?>
        <span class="badge badge-info"><?php echo $imc;?></span>
        <?php echo " Su peso es bajo";?>
    </h5>
    <br>
    <!--    PESO NORMAL-->
    <h5>
        <?php echo "El Índice de Masa Corporal : ";?>
        <span class="badge badge-success"><?php echo "NORMAL";?></span>
        <?php echo " es mayor a 18,5 y menor a 25";?>
    </h5>
    <!--    SOBRE PESO-->
    <h5>
        <?php echo "El Índice de Masa Corporal : ";?>
        <span class="badge badge-warning"><?php echo "SOBREPESO";?> </span>
        <?php echo "  es mayor a 25,1 y menor a 29,99"?>
    </h5>
    <!--    OBESIDAD-->
    <h5>
        <?php echo "El Índice de Masa Corporal : ";?>
        <span class="badge badge-important"><?php echo "OBESIDAD";?></span>
        <?php echo "   es mayor a 30";?></span>
    </h5>
    <?php
}
elseif ($imc >= 18.5 && $imc <= 25)
{
    ?>
    <!--        BAJO PESO-->
    <h5>
        <?php echo "El Índice de Masa Corporal : ";?>
        <span class="badge badge-info"><?php echo "BAJO PESO";?></span>
        <?php echo " es menor a 18,5";?>
    </h5>
    <br>
    <!--    PESO NORMAL-->
    <h5 align="center">
        <?php echo "Su Índice de Masa Corporal es de: ";?>
        <span class="badge badge-success"><?php echo $imc;?></span>
        <?php echo " su peso es normal";?>
    </h5>
    <br>
    <!--    SOBRE PESO-->
    <h5>
        <?php echo "El Índice de Masa Corporal : ";?>
        <span class="badge badge-warning"><?php echo "SOBREPESO";?> </span>
        <?php echo "  es mayor a 25,1 y menor a 29,99"?>
    </h5>
    <!--    OBESIDAD-->
    <h5>
        <?php echo "El Índice de Masa Corporal : ";?>
        <span class="badge badge-important"><?php echo "OBESIDAD";?></span>
        <?php echo "   es mayor a 30";?></span>
    </h5>
    <?php
}
elseif ($imc >= 25.1 && $imc <= 29.99)
{
    ?>
    <h5>
        <?php echo "El Índice de Masa Corporal : ";?>
        <span class="badge badge-info"><?php echo "BAJO PESO";?></span>
        <?php echo " es menor a 18,5";?>
    </h5>
    <!--    PESO NORMAL-->
    <h5>
        <?php echo "Su Índice de Masa Corporal es de: ";?>
        <span class="badge badge-success"><?php echo "NORMAL";?></span>
        <?php echo " es mayor a 18,5 y menor a 25";?>
    </h5>
    <br>
    <!--    SOBRE PESO-->
    <h5 align="center">
        <?php echo "Su Índice de Masa Corporal es de: ";?>
        <span class="badge badge-warning"><?php echo $imc;?> </span>
        <?php echo "  tiene sobre peso"?>
    </h5>
    <br>
    <!--    OBESIDAD-->
    <h5>
        <?php echo "El Índice de Masa Corporal : ";?>
        <span class="badge badge-important"><?php echo "OBESIDAD";?></span>
        <?php echo "   es mayor a 30";?></span>
    </h5>
    <?php
}
elseif ($imc >=30)
{
    ?>
    <h5>
        <?php echo "El Índice de Masa Corporal : ";?>
        <span class="badge badge-info"><?php echo "BAJO PESO";?></span>
        <?php echo " es menor a 18,5";?>
    </h5>
    <!--    PESO NORMAL-->
    <h5>
        <?php echo "Su Índice de Masa Corporal es de: ";?>
        <span class="badge badge-success"><?php echo "NORMAL";?></span>
        <?php echo " es mayor a 18,5 y menor a 25";?>
    </h5>
    <!--    SOBRE PESO-->
    <h5>
        <?php echo "El Índice de Masa Corporal : ";?>
        <span class="badge badge-warning"><?php echo "SOBREPESO";?> </span>
        <?php echo "  es mayor a 25,1 y menor a 29,99"?>
    </h5>
    <!--    OBESIDAD-->
    <br>
    <h5 align="center">
        <?php echo "Su Índice de Masa Corporal es de: ";?>
        <span class="badge badge-important"><?php echo $imc;?></span>
        <?php echo " Tiene Obesidad";?></span>
    </h5>
    <?php
}
?>
<br>
    <h1 style="color: dodgerblue" align="center">Diagnóstico de la Tasa del Metabilismo Basal(TBM)</h1>

    <h3 style="color: black" align="center">
        <?php echo "Su Consumo de calorías debe ser de: ";?>
        <?php echo $tmb;?>
        <?php echo " Kilocalorías";?>
    </h3>
<br>

<p style="text-align:center">
    <a href="index.php?r=site/calculo" class="btn btn-info" role="button">Continuar</a>
</p>
<br>