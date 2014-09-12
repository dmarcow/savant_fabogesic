<?php
/* @var $this ProspectoIbuprofenoController */
/* @var $model ProspectoIbuprofeno */

$this->breadcrumbs=array(
	'Prospecto Ibuprofenos'=>array('index'),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Atrás', 'url'=>array('index')),
);
?>

<h1>Modificar Prospecto Ibuprofenos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>