<?php
/* @var $this ProspectoIbuprofenoController */
/* @var $model ProspectoIbuprofeno */

$this->breadcrumbs=array(
	'Prospecto Ibuprofenos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProspectoIbuprofeno', 'url'=>array('index')),
	array('label'=>'Create ProspectoIbuprofeno', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#prospecto-ibuprofeno-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Prospecto Ibuprofenos</h1>

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
	'id'=>'prospecto-ibuprofeno-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Title',
		'Subtitle',
		'Text1',
		'TextIcon1',
		'ImageIcon1Url',
		/*
		'TextIcon2',
		'ImageIcon2Url',
		'TextIcon3',
		'ImageIcon3Url',
		'TextIcon4',
		'ImageIcon4Url',
		'GraphicImageUrl',
		'FechaCreacion',
		'FechaModificacion',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
