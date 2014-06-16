<?php
/* @var $this PresentacionesSub1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Presentaciones Sub1s',
);

$this->menu=array(
	array('label'=>'Create PresentacionesSub1', 'url'=>array('create')),
	array('label'=>'Manage PresentacionesSub1', 'url'=>array('admin')),
);
?>

<h1>Presentaciones Sub1s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
