<?php
/* @var $this PresentacionesSub1Controller */
/* @var $model PresentacionesSub1 */

$this->breadcrumbs=array(
	'Cápsulas blandas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Atrás', 'url'=>array('index')),
	// array('label'=>'Create PresentacionesSub1', 'url'=>array('create')),
	// array('label'=>'View PresentacionesSub1', 'url'=>array('view', 'id'=>$model->id)),
	// array('label'=>'Manage PresentacionesSub1', 'url'=>array('admin')),
);
?>

<h1>Cápsulas blandas <!--<?php echo $model->id; ?>--></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>