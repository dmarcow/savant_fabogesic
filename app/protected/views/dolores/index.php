<?php
/* @var $this DoloresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dolores',
);

$this->menu=array(
  array('label'=>'Modificar Dolores', 'url'=>array('dolores/update/1')),
);
?>

<h1>Dolores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
