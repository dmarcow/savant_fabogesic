<?php
/* @var $this DoloresCabezaController */
/* @var $model DoloresCabeza */

$this->breadcrumbs=array(
	'Dolores Cabezas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DoloresCabeza', 'url'=>array('index')),
	array('label'=>'Create DoloresCabeza', 'url'=>array('create')),
	array('label'=>'View DoloresCabeza', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DoloresCabeza', 'url'=>array('admin')),
);
?>

<h1>Update DoloresCabeza <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>