<?php
/* @var $this EditableContentController */
/* @var $model EditableContent */

$this->breadcrumbs=array(
	'Editable Contents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EditableContent', 'url'=>array('index')),
	array('label'=>'Create EditableContent', 'url'=>array('create')),
	array('label'=>'View EditableContent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EditableContent', 'url'=>array('admin')),
);
?>

<h1>Update EditableContent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>