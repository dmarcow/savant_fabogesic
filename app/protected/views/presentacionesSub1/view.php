<?php
/* @var $this PresentacionesSub1Controller */
/* @var $model PresentacionesSub1 */

$this->breadcrumbs=array(
	'Presentaciones Sub1s'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PresentacionesSub1', 'url'=>array('index')),
	array('label'=>'Create PresentacionesSub1', 'url'=>array('create')),
	array('label'=>'Update PresentacionesSub1', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PresentacionesSub1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PresentacionesSub1', 'url'=>array('admin')),
);
?>

<h1>View PresentacionesSub1 #<?php echo $model->id; ?></h1>

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
		'Sub4ImageUrl',
		'Sub4Text',
		'Sub4Link',
		'Sub5ImageUrl',
		'Sub5Text',
		'Sub5Link',
		'FechaCreacion',
		'FechaModificacion',
	),
)); ?>
