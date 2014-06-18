<?php
/* @var $this ProspectoIbuprofenoController */
/* @var $model ProspectoIbuprofeno */

$this->breadcrumbs=array(
	'Prospecto Ibuprofenos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProspectoIbuprofeno', 'url'=>array('index')),
	array('label'=>'Manage ProspectoIbuprofeno', 'url'=>array('admin')),
);
?>

<h1>Create ProspectoIbuprofeno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>