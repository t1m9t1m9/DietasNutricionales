<?php
$this->pageTitle = 'Formulario de Registro de Alimentos';
$this->breadcrumbs = array('ingreso de alimentos');
?>

<h3 align="center" style="color:dodgerblue;">Formulario de Ingreso de Alimentos</h3>

<strong class = 'text-info'><?php echo $msg; ?></strong>

<div class="form">
<?php
$form = $this->beginWidget('CActiveForm', array(
    'method' => 'POST',
    'action' => Yii::app()->createUrl('site/ingresoalimentos'),
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
        echo $form->textField($model, 'nombre');
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

    <!--PORCION POR ALMUERZO-->
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'palmuerzo');
        echo $form->textField($model, 'palmuerzo');
        echo $form->error($model, 'palmuerzo', array('class' => 'text-error'));
        ?>
    </div>

    <!--PORCION POR MERIENDA-->
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'pmerienda');
        echo $form->textField($model, 'pmerienda');
        echo $form->error($model, 'pmerienda', array('class' => 'text-error'));
        ?>
    </div>

    <!--PORCION POR BREAK-->
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'pbreak');
        echo $form->textField($model, 'pbreak');
        echo $form->error($model, 'pbreak', array('class' => 'text-error'));
        ?>
    </div>

        <!--BOTON SUBMIT-->
        <div class="row" align="center">
        <?php
        echo CHtml::submitButton("Registrar", array('class' => 'btn btn-primary'));
        ?>
        </div>

    <?php $this->endWidget(); ?>
</div>