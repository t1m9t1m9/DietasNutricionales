<?php
/* @var $this DesayunoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Desayuno',
);

//$this->menu=array(
//	//array('label'=>'Create Desayuno', 'url'=>array('create')),
//	array('label'=>'Manage Desayuno', 'url'=>array('admin')),
//);
?>
<h1 style="color:dodgerblue; text-align: center">Alimentos del Desayuno</h1>

<?php
$dataProvider->pagination->pageSize = 2;
$this->widget('zii.widgets.CListView',
    array(
	        'dataProvider'=>$dataProvider,
	        'itemView'=>'_view',
          )
);


