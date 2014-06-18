<?php
/* @var $this PresentacionesSub3Controller */
/* @var $model PresentacionesSub3 */

$this->breadcrumbs=array(
	'Presentaciones Sub3s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PresentacionesSub3', 'url'=>array('index')),
	array('label'=>'Create PresentacionesSub3', 'url'=>array('create')),
	array('label'=>'View PresentacionesSub3', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PresentacionesSub3', 'url'=>array('admin')),
);
?>

<h1>Update PresentacionesSub3 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>