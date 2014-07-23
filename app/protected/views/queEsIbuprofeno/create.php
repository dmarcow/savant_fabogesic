<?php
/* @var $this QueEsIbuprofenoController */
/* @var $model QueEsIbuprofeno */

$this->breadcrumbs=array(
	'Que Es Ibuprofenos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List QueEsIbuprofeno', 'url'=>array('index')),
	array('label'=>'Manage QueEsIbuprofeno', 'url'=>array('admin')),
);
?>

<h1>Create QueEsIbuprofeno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>