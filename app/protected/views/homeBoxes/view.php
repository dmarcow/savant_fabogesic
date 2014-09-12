<?php
/* @var $this HomeBoxesController */
/* @var $model HomeBoxes */

$this->breadcrumbs=array(
	'Home Boxes'=>array('index'),
	$model->Title,
);

$this->menu=array(
	array('label'=>'Atrás', 'url'=>array('index')),
);
?>

<h1>View HomeBoxes #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Title',
		'Text',
		'ButtonText',
		'ButtonClass',
		'ButtonLink',
		'ImageUrl',
	),
)); ?>
