<?php
/* @var $this HomeBoxesController */
/* @var $model HomeBoxes */

$this->breadcrumbs=array(
	'Home Boxes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HomeBoxes', 'url'=>array('index')),
	array('label'=>'Manage HomeBoxes', 'url'=>array('admin')),
);
?>

<h1>Create HomeBoxes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>