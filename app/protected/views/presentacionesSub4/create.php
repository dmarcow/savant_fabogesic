<?php
/* @var $this PresentacionesSub4Controller */
/* @var $model PresentacionesSub4 */

$this->breadcrumbs=array(
	'Presentaciones Sub4s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PresentacionesSub4', 'url'=>array('index')),
	array('label'=>'Manage PresentacionesSub4', 'url'=>array('admin')),
);
?>

<h1>Create PresentacionesSub4</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>