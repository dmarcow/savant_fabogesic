<?php
/* @var $this QueEsIbuprofenoController */
/* @var $model QueEsIbuprofeno */

$this->breadcrumbs=array(
	'¿Qué es el Ibuprofeno?'=>array('index'),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Atrás', 'url'=>array('index')),
);
?>

<h1>Modificar ¿Qué es el Ibuprofeno?</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>