<?php
/* @var $this ProspectoIbuprofenoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Prospecto Ibuprofenos',
);

$this->menu=array(
  array('label'=>'Modificar Prospecto Ibuprofenos', 'url'=>array('prospectoIbuprofeno/update/1')),
);
?>

<h1>Prospecto Ibuprofenos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
