<?php
/* @var $this ProspectoIbuprofenoController */
/* @var $model ProspectoIbuprofeno */

$this->breadcrumbs=array(
	'Prospecto Ibuprofenos'=>array('index'),
	$model->Title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProspectoIbuprofeno', 'url'=>array('index')),
	array('label'=>'Create ProspectoIbuprofeno', 'url'=>array('create')),
	array('label'=>'View ProspectoIbuprofeno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProspectoIbuprofeno', 'url'=>array('admin')),
);
?>

<h1>Update ProspectoIbuprofeno <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>