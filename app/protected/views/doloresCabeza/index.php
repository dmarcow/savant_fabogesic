<?php
/* @var $this DoloresCabezaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dolores Cabezas',
);

$this->menu=array(
	array('label'=>'Create DoloresCabeza', 'url'=>array('create')),
	array('label'=>'Manage DoloresCabeza', 'url'=>array('admin')),
);
?>

<h1>Dolores Cabezas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
