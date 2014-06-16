<?php
/* @var $this PresentacionesSub2Controller */
/* @var $model PresentacionesSub2 */

$this->breadcrumbs=array(
	'Presentaciones Sub2s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PresentacionesSub2', 'url'=>array('index')),
	array('label'=>'Create PresentacionesSub2', 'url'=>array('create')),
	array('label'=>'View PresentacionesSub2', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PresentacionesSub2', 'url'=>array('admin')),
);
?>

<h1>Update PresentacionesSub2 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>