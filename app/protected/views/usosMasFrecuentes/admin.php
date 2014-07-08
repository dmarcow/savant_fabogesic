<?php
/* @var $this UsosMasFrecuentesController */
/* @var $model UsosMasFrecuentes */

$this->breadcrumbs=array(
	'Usos Mas Frecuentes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UsosMasFrecuentes', 'url'=>array('index')),
	array('label'=>'Create UsosMasFrecuentes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usos-mas-frecuentes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Usos Mas Frecuentes</h1>

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
	'id'=>'usos-mas-frecuentes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Image1Url',
		'Text1',
		'Image2Url',
		'Text2',
		'Image3Url',
		'Text3',
		'Image4Url',
		// 'Text4',
		// 'Image5Url',
		// 'Text5',
		// 'Image6Url',
		// 'Text6',
		'FechaCreacion',
		'FechaModificacion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
