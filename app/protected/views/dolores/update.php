<?php
/* @var $this DoloresController */
/* @var $model Dolores */

$this->breadcrumbs=array(
	'Dolores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dolores', 'url'=>array('index')),
	array('label'=>'Create Dolores', 'url'=>array('create')),
	array('label'=>'View Dolores', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dolores', 'url'=>array('admin')),
);
?>

<h1>Update Dolores <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>