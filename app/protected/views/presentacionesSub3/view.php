<?php
/* @var $this PresentacionesSub3Controller */
/* @var $model PresentacionesSub3 */

$this->breadcrumbs=array(
	'Presentaciones Sub3s'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PresentacionesSub3', 'url'=>array('index')),
	array('label'=>'Create PresentacionesSub3', 'url'=>array('create')),
	array('label'=>'Update PresentacionesSub3', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PresentacionesSub3', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PresentacionesSub3', 'url'=>array('admin')),
);
?>

<h1>View PresentacionesSub3 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Image1Url',
		'Image2Url',
		'Image3Url',
		'Image4Url',
		'Image5Url',
		'Image6Url',
		'Image7Url',
		'Image8Url',
		'Image9Url',
		'Image10Url',
		'Text1',
		'Text2',
		'Text3',
		'Text4',
		'Text5',
		'Text6',
		'BtnImageUrl1',
		'BtnImageUrl2',
		'Text9',
		'Text10',
		'Text11',
		'Text12',
		'Text13',
		'Prospecto1ImageUrl',
		'Prospecto2ImageUrl',
	),
)); ?>
