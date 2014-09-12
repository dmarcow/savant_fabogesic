<?php
/* @var $this PresentacionesSub3Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Solución Pediátrica',
);

$this->menu=array(
array('label'=>'Modificar Solución Pediátrica', 'url'=>array('presentacionesSub3/update/1')),
);
?>

<h1>Suspensión Oral</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
