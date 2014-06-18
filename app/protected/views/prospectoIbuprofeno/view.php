<?php
/* @var $this ProspectoIbuprofenoController */
/* @var $model ProspectoIbuprofeno */

$this->breadcrumbs=array(
	'Prospecto Ibuprofenos'=>array('index'),
	$model->Title,
);

$this->menu=array(
	array('label'=>'List ProspectoIbuprofeno', 'url'=>array('index')),
	array('label'=>'Create ProspectoIbuprofeno', 'url'=>array('create')),
	array('label'=>'Update ProspectoIbuprofeno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProspectoIbuprofeno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProspectoIbuprofeno', 'url'=>array('admin')),
);
?>

<h1>View ProspectoIbuprofeno #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Title',
		'Subtitle',
		'Text1',
		'TextIcon1',
		'ImageIcon1Url',
		'TextIcon2',
		'ImageIcon2Url',
		'TextIcon3',
		'ImageIcon3Url',
		'TextIcon4',
		'ImageIcon4Url',
		'GraphicImageUrl',
		'FechaCreacion',
		'FechaModificacion',
	),
)); ?>
