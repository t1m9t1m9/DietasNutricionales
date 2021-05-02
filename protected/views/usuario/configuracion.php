<?php
/* @var $this UsuarioController */
$this->pageTitle = "Cambiar Password";
$this->breadcrumbs=array('Cambiar password',);
?>

<h3 align="center" style="color:dodgerblue;">Cambiar Password</h3>

<h5 style="text-align: center"><?php echo $msg; ?></h5>

<div class="form">
    <?php
    $form = $this->beginWidget("CActiveForm",
            array(
                    'method' => 'POST',
                    'action' => Yii::app()->createUrl('usuario/configuracion'),
                    'enableClientValidation' => true,
                    'clientOptions' => array(
                          'validateOnSubmit' => true,
                ),
            ));
    ?>
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'password');
        echo $form->passwordField($model, 'password');
        echo $form->error($model, 'password', array('class' => 'text-error'));
        ?>
    </div>

    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'nuevo_password');
        echo $form->passwordField($model, 'nuevo_password');
        echo $form->error($model, 'nuevo_password', array('class' => 'text-error'));
        ?>
    </div>

    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'repetir_nuevo_password');
        echo $form->passwordField($model, 'repetir_nuevo_password');
        echo $form->error($model, 'repetir_nuevo_password', array('class' => 'text-error'));
        ?>
    </div>

    <div class="row" align="center">
        <?php
        echo CHtml::submitButton("Guardar password", array('class' => 'btn btn-primary'));
         ?>
    </div>

<?php $this->endWidget(); ?>
</div>