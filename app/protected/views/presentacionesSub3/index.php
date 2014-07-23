<?php
/* @var $this PresentacionesSub3Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Presentaciones Sub3s',
);

$this->menu=array(
	array('label'=>'Create PresentacionesSub3', 'url'=>array('create')),
	array('label'=>'Manage PresentacionesSub3', 'url'=>array('admin')),
);
?>

<h1>Presentaciones Sub3s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
