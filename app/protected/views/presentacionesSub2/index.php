<?php
/* @var $this PresentacionesSub2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Presentaciones Sub2s',
);

$this->menu=array(
	array('label'=>'Create PresentacionesSub2', 'url'=>array('create')),
	array('label'=>'Manage PresentacionesSub2', 'url'=>array('admin')),
);
?>

<h1>Presentaciones Sub2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
