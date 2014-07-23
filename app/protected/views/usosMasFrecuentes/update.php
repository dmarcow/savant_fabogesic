<?php
/* @var $this UsosMasFrecuentesController */
/* @var $model UsosMasFrecuentes */

$this->breadcrumbs=array(
	'Usos Mas Frecuentes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsosMasFrecuentes', 'url'=>array('index')),
	array('label'=>'Create UsosMasFrecuentes', 'url'=>array('create')),
	array('label'=>'View UsosMasFrecuentes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UsosMasFrecuentes', 'url'=>array('admin')),
);
?>

<h1>Update UsosMasFrecuentes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>