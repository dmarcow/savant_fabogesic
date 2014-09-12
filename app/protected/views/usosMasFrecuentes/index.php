<?php
/* @var $this UsosMasFrecuentesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usos Más Frecuentes',
);

$this->menu=array(
	array('label'=>'Modificar Usos Más Frecuentes', 'url'=>array('usosMasFrecuentes/update/1')),
);
?>

<h1>Usos Más Frecuentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
