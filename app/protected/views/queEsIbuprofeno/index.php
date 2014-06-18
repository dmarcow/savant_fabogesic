<?php
/* @var $this QueEsIbuprofenoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Que Es Ibuprofenos',
);

$this->menu=array(
	array('label'=>'Create QueEsIbuprofeno', 'url'=>array('create')),
	array('label'=>'Manage QueEsIbuprofeno', 'url'=>array('admin')),
);
?>

<h1>Que Es Ibuprofenos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
