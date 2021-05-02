<?php
/* @var $this DesayunoController */
/* @var $data Desayuno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('energia')); ?>:</b>
	<?php echo CHtml::encode($data->energia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proteinas')); ?>:</b>
	<?php echo CHtml::encode($data->proteinas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carbohidratos')); ?>:</b>
	<?php echo CHtml::encode($data->carbohidratos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grasas')); ?>:</b>
	<?php echo CHtml::encode($data->grasas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo')); ?>:</b>
	<?php echo CHtml::encode($data->costo); ?>
	<br />

	<b>
    <?php echo CHtml::encode($data->getAttributeLabel('pdesayuno')); ?>:</b>
	<?php echo CHtml::encode($data->pdesayuno); ?>
	<br /> <br />


</div>