<?php
/* @var $this PresentacionesSub3Controller */
/* @var $model PresentacionesSub3 */

$this->breadcrumbs=array(
	'Presentaciones Sub3s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PresentacionesSub3', 'url'=>array('index')),
	array('label'=>'Manage PresentacionesSub3', 'url'=>array('admin')),
);
?>

<h1>Create PresentacionesSub3</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>