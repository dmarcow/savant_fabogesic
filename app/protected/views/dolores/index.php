<?php
/* @var $this DoloresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dolores',
);

$this->menu=array(
	array('label'=>'Create Dolores', 'url'=>array('create')),
	array('label'=>'Manage Dolores', 'url'=>array('admin')),
);
?>

<h1>Dolores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
