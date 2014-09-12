<?php
/* @var $this ContactoController */
/* @var $model Contacto */

$this->breadcrumbs=array(
	'Contacto'=>array('index'),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Atrás', 'url'=>array('index')),
);
?>

<h1>Modificar Contacto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>