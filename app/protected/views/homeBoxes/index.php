<?php
/* @var $this HomeBoxesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Home Boxes',
);
/*
$this->menu=array(
	array('label'=>'Create HomeBoxes', 'url'=>array('create')),
	array('label'=>'Manage HomeBoxes', 'url'=>array('admin')),
);
*/
?>

<h1>Home Boxes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
