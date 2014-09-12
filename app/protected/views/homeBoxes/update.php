<?php
/* @var $this HomeBoxesController */
/* @var $model HomeBoxes */

$this->breadcrumbs=array(
	'Home Boxes'=>array('index'),
	$model->Title=>array('view','id'=>$model->Id),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Atrás', 'url'=>array('index')),
);
?>

<h1>Modificar Home Box <?php echo $model->Title; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>