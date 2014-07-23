<?php
/* @var $this PresentacionesSub1Controller */
/* @var $model PresentacionesSub1 */

$this->breadcrumbs=array(
	'Cápsulas blandas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PresentacionesSub1', 'url'=>array('index')),
	array('label'=>'Create PresentacionesSub1', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#presentaciones-sub1-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Cápsulas blandas</h1>

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
	'id'=>'presentaciones-sub1-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Sub1ImageUrl',
		'Sub1Text',
		'Sub1Link',
		'Sub2ImageUrl',
		'Sub2Text',
		/*
		'Sub2Link',
		'Sub3ImageUrl',
		'Sub3Text',
		'Sub3Link',
		'Sub4ImageUrl',
		'Sub4Text',
		'Sub4Link',
		'Sub5ImageUrl',
		'Sub5Text',
		'Sub5Link',
		'FechaCreacion',
		'FechaModificacion',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
