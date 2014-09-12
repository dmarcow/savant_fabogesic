<?php
/* @var $this UsosMasFrecuentesController */
/* @var $model UsosMasFrecuentes */

$this->breadcrumbs=array(
	'Usos Más Frecuentes'=>array('index'),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Atrás', 'url'=>array('index')),
);
?>

<h1>Modificar Usos Más Frecuentes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>