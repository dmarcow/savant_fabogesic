<?php
/* @var $this PresentacionesSub1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cápsulas blandas',
);

$this->menu=array(
	// array('label'=>'Create PresentacionesSub1', 'url'=>array('create')),
	// array('label'=>'Manage PresentacionesSub1', 'url'=>array('admin')),
	array('label'=>'Modificar Cápsulas blandas', 'url'=>array('presentacionesSub1/update/1')),
);
?>

<h1>Cápsulas blandas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
