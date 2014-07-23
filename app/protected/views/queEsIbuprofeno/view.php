<?php
/* @var $this QueEsIbuprofenoController */
/* @var $model QueEsIbuprofeno */

$this->breadcrumbs=array(
	'Que Es Ibuprofenos'=>array('index'),
	$model->Title,
);

$this->menu=array(
	array('label'=>'List QueEsIbuprofeno', 'url'=>array('index')),
	array('label'=>'Create QueEsIbuprofeno', 'url'=>array('create')),
	array('label'=>'Update QueEsIbuprofeno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete QueEsIbuprofeno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QueEsIbuprofeno', 'url'=>array('admin')),
);
?>

<h1>View QueEsIbuprofeno #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Title',
		'SubTitle',
		'Text1',
		'Text2',
		'Image1Url',
		'Image2Url',
		'FechaCreacion',
		'FechaModificacion',
	),
)); ?>
