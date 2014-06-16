<?php
/* @var $this PresentacionesSub1Controller */
/* @var $model PresentacionesSub1 */

$this->breadcrumbs=array(
	'Presentaciones Sub1s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PresentacionesSub1', 'url'=>array('index')),
	array('label'=>'Manage PresentacionesSub1', 'url'=>array('admin')),
);
?>

<h1>Create PresentacionesSub1</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>