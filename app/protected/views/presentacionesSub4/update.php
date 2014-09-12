<?php
/* @var $this PresentacionesSub4Controller */
/* @var $model PresentacionesSub4 */

$this->breadcrumbs=array(
	'Solución Pediátrica'=>array('index'),

	'Modificar',
);

$this->menu=array(
	array('label'=>'Atrás', 'url'=>array('index')),
);
?>

<h1>Modificar Solución Pediátrica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>