<?php 
$this->pageTitle = 'Formulario de Registro';
$this->breadcrumbs = array('registro');
?>

<h3 align="center" style="color:dodgerblue;">Formulario de Registro</h3>

<strong class = 'text-info'><?php echo $msg; ?></strong>

<div class="form">
    <?php
        $form = $this->beginWidget('CActiveForm', array(
            'method' => 'POST',
            'action' => Yii::app()->createUrl('site/registro'),
            'id' => 'form',
            'enableClientValidation' => true,
            'enableAjaxValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        )); 
    ?>
        <!--CEDULA-->
        <div class="row" align="center">
            <?php
            echo $form->labelEx($model, 'cedula');
            echo $form->textField($model, 'cedula');
            echo $form->error($model, 'cedula', array('class' => 'text-error'));
            ?>
        </div>

        <!--NOMBRE-->
        <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'nombre');
        echo $form->textField($model, 'nombre');
        echo $form->error($model, 'nombre', array('class' => 'text-error'));
        ?>
        </div>

        <!--APELLIDO-->
        <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'apellido');
        echo $form->textField($model, 'apellido');
        echo $form->error($model, 'apellido', array('class' => 'text-error'));
        ?>
        </div>

        <!--PASSWORD-->
        <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'password');
        echo $form->passwordField($model, 'password');
        echo $form->error($model, 'password', array('class' => 'text-error'));
        ?>
        </div>

        <!--REPETIR PASSWORD-->
        <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'repetir_password');
        echo $form->passwordField($model, 'repetir_password');
        echo $form->error($model, 'repetir_password', array('class' => 'text-error'));
        ?>
        </div>

        <!--BOTON SUBMIT-->
        <div class="row" align="center">
        <?php
        echo CHtml::submitButton("Registrarme", array('class' => 'btn btn-primary'));
        ?>
        </div>

    <?php $this->endWidget(); ?>
</div>