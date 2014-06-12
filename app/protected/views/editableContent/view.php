<?php
/* @var $this EditableContentController */
/* @var $model EditableContent */

$this->breadcrumbs=array(
	'Editable Contents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EditableContent', 'url'=>array('index')),
	array('label'=>'Create EditableContent', 'url'=>array('create')),
	array('label'=>'Update EditableContent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EditableContent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EditableContent', 'url'=>array('admin')),
);
?>

<h1>View EditableContent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'homeA1',
		'presentacionesA1',
		'FechaCreacion',
		'FechaModificacion',
	),
)); ?>
