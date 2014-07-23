<?php
/* @var $this UsosMasFrecuentesController */
/* @var $model UsosMasFrecuentes */

$this->breadcrumbs=array(
	'Usos Mas Frecuentes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UsosMasFrecuentes', 'url'=>array('index')),
	array('label'=>'Create UsosMasFrecuentes', 'url'=>array('create')),
	array('label'=>'Update UsosMasFrecuentes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UsosMasFrecuentes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsosMasFrecuentes', 'url'=>array('admin')),
);
?>

<h1>View UsosMasFrecuentes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Image1Url',
		'Text1',
		'Image2Url',
		'Text2',
		'Image3Url',
		'Text3',
		'Image4Url',
		'Text4',
		'Image5Url',
		'Text5',
		'Image6Url',
		'Text6',
		'FechaCreacion',
		'FechaModificacion',
	),
)); ?>
