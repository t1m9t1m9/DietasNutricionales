<?php
/* @var $this DesayunoController */
/* @var $model Desayuno */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'energia'); ?>
		<?php echo $form->textField($model,'energia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proteinas'); ?>
		<?php echo $form->textField($model,'proteinas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carbohidratos'); ?>
		<?php echo $form->textField($model,'carbohidratos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grasas'); ?>
		<?php echo $form->textField($model,'grasas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo'); ?>
		<?php echo $form->textField($model,'costo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pdesayuno'); ?>
		<?php echo $form->textField($model,'pdesayuno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->