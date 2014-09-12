<?php
/* @var $this PresentacionesSub2Controller */
/* @var $model PresentacionesSub2 */

$this->breadcrumbs=array(
	'Comprimidos'=>array('index'),

	'Modificar',
);

$this->menu=array(
	array('label'=>'Atrás', 'url'=>array('index')),
);
?>

<h1>Modificar Comprimidos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>