<?php
/* @var $this PresentacionesSub3Controller */
/* @var $model PresentacionesSub3 */

$this->breadcrumbs=array(
	'Suspensión Oral'=>array('index'),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Atrás', 'url'=>array('index')),
);
?>

<h1>Modificar Suspensión Oral</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>