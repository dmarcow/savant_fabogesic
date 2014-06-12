<?php
/* @var $this EditableContentController */
/* @var $model EditableContent */

$this->breadcrumbs=array(
	'Editable Contents'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EditableContent', 'url'=>array('index')),
	array('label'=>'Create EditableContent', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#editable-content-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Editable Contents</h1>

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
	'id'=>'editable-content-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'homeA1',
		'presentacionesA1',
		'FechaCreacion',
		'FechaModificacion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
