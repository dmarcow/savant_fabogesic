<?php
/* @var $this DoloresCabezaController */
/* @var $model DoloresCabeza */

$this->breadcrumbs=array(
	'Dolores Cabezas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DoloresCabeza', 'url'=>array('index')),
	array('label'=>'Manage DoloresCabeza', 'url'=>array('admin')),
);
?>

<h1>Create DoloresCabeza</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>