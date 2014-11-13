<?php
/* @var $this WarstwaController */
/* @var $model Warstwa */

$this->breadcrumbs=array(
	'Warstwas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Warstwa', 'url'=>array('index')),
	array('label'=>'Create Warstwa', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#warstwa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Warstwas</h1>

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
	'id'=>'warstwa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nazwa',
		'typ_obiektow',
		'ilosc_obiektow',
		'czy_wyswietlic',
		'data_aktualizacji',
		/*
		'user_id',
		'z_index',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
