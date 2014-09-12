<?php
/* @var $this PresentacionesSub4Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Solución Pediátrica',
);

$this->menu=array(
	array('label'=>'Modificar Solución Pediátrica', 'url'=>array('presentacionesSub4/update/1')),
);
?>

<h1>Solución Pediátrica</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
