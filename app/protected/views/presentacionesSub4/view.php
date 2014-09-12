<?php
/* @var $this PresentacionesSub4Controller */
/* @var $model PresentacionesSub4 */

$this->breadcrumbs=array(
	'Presentaciones Sub4s'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PresentacionesSub4', 'url'=>array('index')),
	array('label'=>'Create PresentacionesSub4', 'url'=>array('create')),
	array('label'=>'Update PresentacionesSub4', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PresentacionesSub4', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PresentacionesSub4', 'url'=>array('admin')),
);
?>

<h1>View PresentacionesSub4 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Sub1ImageUrl',
		'Sub1Text',
		'Sub1Link',
		'Sub2ImageUrl',
		'Sub2Text',
		'Sub2Link',
		'Sub3ImageUrl',
		'Sub3Text',
		'Sub3Link',
		'Prospecto',
		'Prospecto2',
		'FechaCreacion',
		'FechaModificacion',
	),
)); ?>
