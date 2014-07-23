<?php
/* @var $this DoloresController */
/* @var $model Dolores */

$this->breadcrumbs=array(
	'Dolores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dolores', 'url'=>array('index')),
	array('label'=>'Manage Dolores', 'url'=>array('admin')),
);
?>

<h1>Create Dolores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>