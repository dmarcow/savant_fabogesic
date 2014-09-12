<?php
/* @var $this ContactoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contacto',
);

$this->menu=array(
  array('label'=>'Modificar Contacto', 'url'=>array('contacto/update/1')),
);
?>

<h1>Contacto</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
