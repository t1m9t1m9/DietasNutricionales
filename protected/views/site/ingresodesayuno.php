<?php
$this->pageTitle = 'Formulario de Registro de Desayuno';
$this->breadcrumbs = array('Actualizar los alimentos del desayuno');
$idDesayuno = Desayuno::model()->findAll();

foreach ($idDesayuno as $valores)
{
    $nombre = $valores->nombre;
    $energia = $valores->energia;
    $proteinas = $valores->proteinas;
    $carbohidratos = $valores->carbohidratos;
    $grasas = $valores->grasas;
    $costo = $valores->costo;
    $pdesayuno = $valores->pdesayuno;
}
?>

<h3 align="center" style="color:dodgerblue;">Actualizar los Alimentos del Desayuno</h3>

<strong class = 'text-info'><?php echo $msg; ?></strong>

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'method' => 'POST',
        'action' => Yii::app()->createUrl('site/ingresodesayuno'),
        'id' => 'form',
        'enableClientValidation' => true,
        'enableAjaxValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ))
    ?>
    <!--NOMBRE-->
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'nombre');
        echo $form->textField($model, 'nombre');echo "<br>".' El valor actual : '.$nombre;
        echo $form->error($model, 'nombre', array('class' => 'text-error'));
        ?>
    </div>

    <!--ENERGIA-->
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'energia');
        echo $form->textField($model, 'energia');
        echo $form->error($model, 'energia', array('class' => 'text-error'));
        ?>
    </div>

    <!--PROTEINAS-->
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'proteinas');
        echo $form->textField($model, 'proteinas');
        echo $form->error($model, 'proteinas', array('class' => 'text-error'));
        ?>
    </div>

    <!--CARBOHIDRATOS-->
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'carbohidratos');
        echo $form->textField($model, 'carbohidratos');
        echo $form->error($model, 'carbohidratos', array('class' => 'text-error'));
        ?>
    </div>

    <!--GRASAS-->
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'grasas');
        echo $form->textField($model, 'grasas');
        echo $form->error($model, 'grasas', array('class' => 'text-error'));
        ?>
    </div>

    <!--COSTO-->
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'costo');
        echo $form->textField($model, 'costo');
        echo $form->error($model, 'costo', array('class' => 'text-error'));
        ?>
    </div>

    <!--PORCION POR DESAYUNO-->
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'pdesayuno');
        echo $form->textField($model, 'pdesayuno');
        echo $form->error($model, 'pdesayuno', array('class' => 'text-error'));
        ?>
    </div>

    <!--BOTON SUBMIT-->
    <div class="row" align="center">
        <?php
        echo CHtml::submitButton("Actualizar", array('class' => 'btn btn-primary'));
        ?>
    </div>

    <?php $this->endWidget(); ?>
</div>