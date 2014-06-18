<?php
/* @var $this QueEsIbuprofenoController */
/* @var $model QueEsIbuprofeno */

$this->breadcrumbs=array(
	'Que Es Ibuprofenos'=>array('index'),
	$model->Title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List QueEsIbuprofeno', 'url'=>array('index')),
	array('label'=>'Create QueEsIbuprofeno', 'url'=>array('create')),
	array('label'=>'View QueEsIbuprofeno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage QueEsIbuprofeno', 'url'=>array('admin')),
);
?>

<h1>Update QueEsIbuprofeno <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>