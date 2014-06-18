<?php
/* @var $this UsosMasFrecuentesController */
/* @var $model UsosMasFrecuentes */

$this->breadcrumbs=array(
	'Usos Mas Frecuentes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsosMasFrecuentes', 'url'=>array('index')),
	array('label'=>'Manage UsosMasFrecuentes', 'url'=>array('admin')),
);
?>

<h1>Create UsosMasFrecuentes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>