<?php
/* @var $this DoloresController */
/* @var $model Dolores */

$this->breadcrumbs=array(
	'Dolores'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Dolores', 'url'=>array('index')),
	array('label'=>'Create Dolores', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dolores-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Dolores</h1>

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
	'id'=>'dolores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'MuscularesImageUrl',
		'MuscularesSubtitle',
		'MuscularesSub1',
		'PosturalesImageUrl',
		'PostularesSubtitle',
		/*
		'PostularesSub1',
		'PostularesSub2',
		'PostularesSub3',
		'MenstrualesImageUrl',
		'MenstrualesSubtitle',
		'MenstrualesSub1',
		'MenstrualesSub2',
		'MenstrualesSub2ImageUrl',
		'MenstrualesSub3',
		'ArticularesImageUrl',
		'ArticularesSubtitle',
		'ArticularesSub1',
		'ArticularesSub2',
		'ArticularesSub3',
		'ArticularesSub4',
		'ArticularesSub5',
		'FechaCreacion',
		'FechaModificacion',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
