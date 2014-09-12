<?php
/* @var $this DoloresCabezaController */
/* @var $model DoloresCabeza */

$this->breadcrumbs=array(
	'Dolores Cabeza'=>array('index'),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Atrás', 'url'=>array('index')),
);
?>

<h1>Modificar Dolores Cabeza</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>