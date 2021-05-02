<?php
/* @var $this DesayunoController */
/* @var $model Desayuno */

$this->breadcrumbs=array(
	'Desayunos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Desayuno', 'url'=>array('index')),
	array('label'=>'Manage Desayuno', 'url'=>array('admin')),
);
?>

<h1>Create Desayuno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>