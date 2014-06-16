<?php
/* @var $this PresentacionesSub1Controller */
/* @var $model PresentacionesSub1 */

$this->breadcrumbs=array(
	'Presentaciones Sub1s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PresentacionesSub1', 'url'=>array('index')),
	array('label'=>'Create PresentacionesSub1', 'url'=>array('create')),
	array('label'=>'View PresentacionesSub1', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PresentacionesSub1', 'url'=>array('admin')),
);
?>

<h1>Update PresentacionesSub1 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>