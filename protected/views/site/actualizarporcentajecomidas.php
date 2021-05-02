<?php
$this->pageTitle = 'Formulario de Actualizacion de Porcentajes de Comida';
$this->breadcrumbs = array('Actualizar porcentajes de Comidas');
$idPorcentaje = Porcentajecomidas::model()->findAll();
foreach($idPorcentaje as $valores)
{
    //Porcentaje del desayuno
    $porcentajeDesayuno = $valores->desayuno;
    //Porcentaje del Brake de la Mañana
    $porcentajeBrakemanana = $valores->brakemanana;
    //Porcentaje del almuerzo
    $porcentajeAlmuerzo = $valores->almuerzo;
    //Porcentaje del brake de la tarde
    $porcentajeBraketarde = $valores->braketarde;
    //Porcentaje de la merienda
    $porcentajeMerienda = $valores->merienda;
}
?>

<h3 align="center" style="color:dodgerblue;">Actualizar Porcentajes de Comidas</h3>
    <h4 align="center" style="color:dodgerblue;"><strong class = 'text-info'><?php echo $msg; ?></strong></h4>

    <div class="form">
<?php
$form = $this->beginWidget('CActiveForm', array(
    'method' => 'POST',
    'action' => Yii::app()->createUrl('site/actualizarporcentajecomidas'),
    'id' => 'form',
    'enableClientValidation' => true,
    'enableAjaxValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
))
?>
<div class="row"  align="center" style="background-color: #214a86; color: white">
    <?php
    echo $form->labelEx($model, 'desayuno');
    echo $form->textField($model, 'desayuno'); echo "<br>".' El valor actual es del : '.$porcentajeDesayuno.' %';
    echo $form->error($model, 'desayuno', array('class' => 'text-error'));
    ?>
</div>
<br>
    <div class="row"  align="center" style="background-color: #214a86; color: white">
    <?php
    echo $form->labelEx($model, 'breakmanana');
    echo $form->textField($model, 'breakmanana'); echo "<br>".' El valor actual es del : '.$porcentajeBrakemanana.' %';
    echo $form->error($model, 'breakmanana', array('class' => 'text-error'));
    ?>
</div>
<br>
    <div class="row"  align="center" style="background-color: #214a86; color: white">
    <?php
    echo $form->labelEx($model, 'almuerzo');
    echo $form->textField($model, 'almuerzo'); echo "<br>".' El valor actual es del : '.$porcentajeAlmuerzo.' %';
    echo $form->error($model, 'almuerzo', array('class' => 'text-error'));
    ?>
</div>
<br>
    <div class="row"  align="center" style="background-color: #214a86; color: white">
    <?php
    echo $form->labelEx($model, 'breaktarde');
    echo $form->textField($model, 'breaktarde'); echo "<br>".' El valor actual es del: '.$porcentajeBraketarde.' %';
    echo $form->error($model, 'breaktarde', array('class' => 'text-error'));
    ?>
</div>
<br>
    <div class="row"  align="center" style="background-color: #214a86; color: white">
    <?php
    echo $form->labelEx($model, 'merienda');
    echo $form->textField($model, 'merienda'); echo "<br>".' El valor actual es del: '.$porcentajeMerienda.' %';
    echo $form->error($model, 'merienda', array('class' => 'text-error'));
    ?>
</div>
<br>
    <!--BOTON SUBMIT-->
    <div class="row" align="center">
        <?php
        echo CHtml::submitButton("Actualizar", array('class' => 'btn btn-primary'));
        ?>
    </div>

<?php $this->endWidget(); ?>