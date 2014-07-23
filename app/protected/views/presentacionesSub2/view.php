<?php
/* @var $this PresentacionesSub2Controller */
/* @var $model PresentacionesSub2 */

$this->breadcrumbs=array(
	'Presentaciones Sub2s'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PresentacionesSub2', 'url'=>array('index')),
	array('label'=>'Create PresentacionesSub2', 'url'=>array('create')),
	array('label'=>'Update PresentacionesSub2', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PresentacionesSub2', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PresentacionesSub2', 'url'=>array('admin')),
);
?>

<h1>View PresentacionesSub2 #<?php echo $model->id; ?></h1>

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
		'FechaCreacion',
		'FechaModificacion',
	),
)); ?>
