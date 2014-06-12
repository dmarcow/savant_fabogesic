<?php
/* @var $this EditableContentController */
/* @var $model EditableContent */

$this->breadcrumbs=array(
	'Editable Contents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EditableContent', 'url'=>array('index')),
	array('label'=>'Manage EditableContent', 'url'=>array('admin')),
);
?>

<h1>Create EditableContent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>