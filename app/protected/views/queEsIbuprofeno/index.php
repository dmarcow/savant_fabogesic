<?php
/* @var $this QueEsIbuprofenoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'¿Qué es el Ibuprofeno?',
);

$this->menu=array(
  array('label'=>'Modificar ¿Qué es el Ibuprofeno?', 'url'=>array('QueEsIbuprofeno/update/1')),
);
?>

<h1>¿Qué es el Ibuprofeno?</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
