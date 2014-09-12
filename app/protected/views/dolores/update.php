<?php
/* @var $this DoloresController */
/* @var $model Dolores */

$this->breadcrumbs=array(
	'Dolores'=>array('index'),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Atrás', 'url'=>array('index')),
);
?>

<h1>Modificar Dolores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>