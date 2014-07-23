<?php
/* @var $this PresentacionesSub3Controller */
/* @var $model PresentacionesSub3 */

$this->breadcrumbs=array(
	'Presentaciones Sub3s'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PresentacionesSub3', 'url'=>array('index')),
	array('label'=>'Create PresentacionesSub3', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#presentaciones-sub3-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Presentaciones Sub3s</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'presentaciones-sub3-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Image1Url',
		'Image2Url',
		'Image3Url',
		'Image4Url',
		'Image5Url',
		/*
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
		'FechaCreacion',
		'FechaModificacion',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
