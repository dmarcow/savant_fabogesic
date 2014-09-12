<?php
/* @var $this PresentacionesSub2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comprimidos',
);

$this->menu=array(
	array('label'=>'Modificar Comprimidos', 'url'=>array('presentacionesSub2/update/1')),
);
?>

<h1>Comprimidos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
