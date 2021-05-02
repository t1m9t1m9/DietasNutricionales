<?php

$this->pageTitle = 'Recuperar Password';
$this->breadcrumbs = array('Recuperar Password');

echo $msg;
//echo $password;

?>
<h1 style="text-align:center; color:dodgerblue">RECUPERAR PASSWORD</h1>

<h4 style="text-align: center" class="text-info"><?php echo $msg1; ?></h4>

<div class="form">
    <?php $form = $this->beginWidget('CActiveForm', 
        array(  
            'method' => 'POST',
            'action' => Yii::app()->createUrl('site/recuperarpassword'),
            'enableClientValidation' => true,
            'clientOptions' => array('validateOnSubmit' => true),
        )
    );
    ?>
</div>

<div class="row" style="text-align:center">
    <?php
    echo $form->labelEx($model, 'cedula');
    echo $form->textField($model, 'cedula');
    echo $form->error($model, 'cedula', array('class'=> 'text-error'));
    ?>
</div>

<div class="row" style="text-align:center">
    <?php
        echo $form->labelEx($model, 'captcha');
        $this->widget('CCaptcha', array('buttonLabel' => 'Actualizar código '."<br>"));
        echo $form->textField($model, 'captcha');   
    ?>

    <div class="text-info" style="text-align:center">
        Ingresar el texto de la imagen.
        <br>
    </div> 
    <?php echo $form->error($model, 'captcha', array('class' => 'text-error')); ?>
</div>
<br>
<div class="row" style="text-align:center">
    <?php echo CHtml::submitButton('Recuperar Password', array('class' => 'btn btn-primary')); ?>
</div>
<br>
<?php $this->endWidget(); ?>
</div>