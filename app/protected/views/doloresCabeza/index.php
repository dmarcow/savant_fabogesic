<?php
/* @var $this DoloresCabezaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dolores Cabeza',
);

$this->menu=array(
  array('label'=>'Modificar Dolores Cabeza', 'url'=>array('doloresCabeza/update/1')),
);
?>

<h1>Dolores Cabeza</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
