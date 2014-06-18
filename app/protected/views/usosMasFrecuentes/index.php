<?php
/* @var $this UsosMasFrecuentesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usos Mas Frecuentes',
);

$this->menu=array(
	array('label'=>'Create UsosMasFrecuentes', 'url'=>array('create')),
	array('label'=>'Manage UsosMasFrecuentes', 'url'=>array('admin')),
);
?>

<h1>Usos Mas Frecuentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
