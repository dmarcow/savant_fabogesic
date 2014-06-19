<?php
/* @var $this DoloresCabezaController */
/* @var $model DoloresCabeza */

$this->breadcrumbs=array(
	'Dolores Cabezas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DoloresCabeza', 'url'=>array('index')),
	array('label'=>'Create DoloresCabeza', 'url'=>array('create')),
	array('label'=>'Update DoloresCabeza', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DoloresCabeza', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DoloresCabeza', 'url'=>array('admin')),
);
?>

<h1>View DoloresCabeza #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ImageUrl',
		'Subtitle',
		'Text1',
		'Text2',
		'Text3',
		'Text4',
		'FechaCreacion',
		'FechaModificacion',
	),
)); ?>
