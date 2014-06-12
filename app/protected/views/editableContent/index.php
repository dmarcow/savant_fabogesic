<?php
/* @var $this EditableContentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Editable Contents',
);

$this->menu=array(
	array('label'=>'Create EditableContent', 'url'=>array('create')),
	array('label'=>'Manage EditableContent', 'url'=>array('admin')),
);
?>

<h1>Editable Contents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
