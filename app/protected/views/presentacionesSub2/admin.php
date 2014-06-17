<?php
/* @var $this PresentacionesSub2Controller */
/* @var $model PresentacionesSub2 */

$this->breadcrumbs=array(
	'Presentaciones Sub2s'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PresentacionesSub2', 'url'=>array('index')),
	array('label'=>'Create PresentacionesSub2', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#presentaciones-sub2-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Presentaciones Sub2s</h1>

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
	'id'=>'presentaciones-sub2-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Sub1ImageUrl',
		'Sub1Text',
		'Sub1Link',
		'Sub2ImageUrl',
		'Sub2Text',
		'Sub2Link',
		'Sub3ImageUrl',
		'Sub3Text',
		'Sub3Link',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
