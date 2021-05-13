<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1 align="center" style="color:dodgerblue;">Login</h1>

<p align="center">Por favor llene el formulario con sus credenciales:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note" align="center">Los campos con <span class="required">*</span> son requeridos.</p>


    <div class="row" align="center">
        <?php echo $form->labelEx($model,'username'); ?>
        <?php echo $form->textField($model,'username'); ?>
        <?php echo $form->error($model,'username', array("class" => "text-error")); ?>
    </div>


	<div class="row" align="center">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password', array("class" => "text-error")); ?>
	</div>

	<div class="row buttons" align="center">
		<?php echo CHtml::submitButton('Login', array("class" => "btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>
</div>





<h6 style="text-align: center">
    <a href="<?php echo Yii::app()->createUrl('site/recuperarpassword'); ?>">
    Recuperar Password
    </a>
</h6>