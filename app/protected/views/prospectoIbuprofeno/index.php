<?php
/* @var $this ProspectoIbuprofenoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Prospecto Ibuprofenos',
);

$this->menu=array(
	array('label'=>'Create ProspectoIbuprofeno', 'url'=>array('create')),
	array('label'=>'Manage ProspectoIbuprofeno', 'url'=>array('admin')),
);
?>

<h1>Prospecto Ibuprofenos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
