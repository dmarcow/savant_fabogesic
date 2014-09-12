<?php
/* @var $this DoloresController */
/* @var $model Dolores */

$this->breadcrumbs=array(
	'Dolores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Dolores', 'url'=>array('index')),
	array('label'=>'Create Dolores', 'url'=>array('create')),
	array('label'=>'Update Dolores', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dolores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dolores', 'url'=>array('admin')),
);
?>

<h1>View Dolores #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'MuscularesImageUrl',
		'MuscularesSubtitle',
		'MuscularesSub1',
		'PosturalesImageUrl',
		'PostularesSubtitle',
		'PostularesSub1',
		'PostularesSub2',
		'PostularesSub3',
		'MenstrualesImageUrl',
		'MenstrualesSubtitle',
		'MenstrualesSub1',
		'MenstrualesSub2',
		'MenstrualesSub2ImageUrl',
		'MenstrualesSub3',
		'ArticularesImageUrl',
		'ArticularesSubtitle',
		'ArticularesSub1',
		'ArticularesSub2',
		'ArticularesSub3',
		'ArticularesSub4',
		'ArticularesSub5',
		'NinosImageUrl',
		'NinosSubtitle',
		'NinosSub1',
		'NinosSub2',
		'NinosSub3',
		'NinosSub4',
		'FechaCreacion',
		'FechaModificacion',
	),
)); ?>
