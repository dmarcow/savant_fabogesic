<?php
/* @var $this PresentacionesSub2Controller */
/* @var $model PresentacionesSub2 */

$this->breadcrumbs=array(
	'Presentaciones Sub2s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PresentacionesSub2', 'url'=>array('index')),
	array('label'=>'Manage PresentacionesSub2', 'url'=>array('admin')),
);
?>

<h1>Create PresentacionesSub2</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>