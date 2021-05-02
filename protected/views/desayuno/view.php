<?php
/* @var $this DesayunoController */
/* @var $model Desayuno */

$this->breadcrumbs=array(
	'Desayunos'=>array('index'),
	$model->id,
);

$this->menu=array(
	//array('label'=>'List Desayuno', 'url'=>array('index')),
	//array('label'=>'Create Desayuno', 'url'=>array('create')),
	array('label'=>'Actualizar Alimento', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Desayuno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Desayuno', 'url'=>array('admin')),
);
?>

<h1 style="color:dodgerblue; text-align: center">Vista de Alimento # <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'energia',
		'proteinas',
		'carbohidratos',
		'grasas',
		'costo',
		'pdesayuno',
	),
)); ?>
