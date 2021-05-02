<?php
/* @var $this DesayunoController */
/* @var $model Desayuno */

$this->breadcrumbs=array(
	'Desayuno'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

//$this->menu=array(
//	array('label'=>'List Desayuno', 'url'=>array('index')),
//	array('label'=>'Create Desayuno', 'url'=>array('create')),
//	array('label'=>'View Desayuno', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage Desayuno', 'url'=>array('admin')),
//);
?>

<h1 style="color:dodgerblue; text-align: center">Actualizar Alimento <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>