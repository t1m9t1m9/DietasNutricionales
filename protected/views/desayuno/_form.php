<?php
/* @var $this DesayunoController */
/* @var $model Desayuno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'desayuno-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

<!--	--><?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre', array('class' => 'text-error')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'energia'); ?>
		<?php echo $form->textField($model,'energia'); ?>
		<?php echo $form->error($model,'energia', array('class' => 'text-error')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proteinas'); ?>
		<?php echo $form->textField($model,'proteinas'); ?>
		<?php echo $form->error($model,'proteinas', array('class' => 'text-error')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carbohidratos'); ?>
		<?php echo $form->textField($model,'carbohidratos'); ?>
		<?php echo $form->error($model,'carbohidratos', array('class' => 'text-error')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grasas'); ?>
		<?php echo $form->textField($model,'grasas'); ?>
		<?php echo $form->error($model,'grasas', array('class' => 'text-error')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'costo'); ?>
		<?php echo $form->textField($model,'costo'); ?>
		<?php echo $form->error($model,'costo', array('class' => 'text-error')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pdesayuno'); ?>
		<?php echo $form->textField($model,'pdesayuno'); ?>
		<?php echo $form->error($model,'pdesayuno', array('class' => 'text-error')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar', array('class' => 'btn btn-primary')); ?>
	</div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
